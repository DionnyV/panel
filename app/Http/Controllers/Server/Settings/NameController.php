<?php

namespace Pterodactyl\Http\Controllers\Server\Settings;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Traits\Controllers\JavascriptInjection;
use Pterodactyl\Contracts\Repository\ServerRepositoryInterface;
use Pterodactyl\Http\Requests\Server\Settings\ChangeServerNameRequest;

use GuzzleHttp\Exception\RequestException;
use Pterodactyl\Contracts\Repository\Daemon\ServerRepositoryInterface as DaemonRepositoryInterface;

class NameController extends Controller
{
    use JavascriptInjection;

    /**
     * @var \Pterodactyl\Contracts\Repository\Daemon\ServerRepositoryInterface
     */
    private $daemonRepository;

    /**
     * @var \Pterodactyl\Contracts\Repository\ServerRepositoryInterface
     */
    private $repository;

    /**
     * NameController constructor.
     * @param \Pterodactyl\Contracts\Repository\ServerRepositoryInterface        $repository
     * @param \Pterodactyl\Contracts\Repository\Daemon\ServerRepositoryInterface $daemonRepository
     */
    public function __construct(ServerRepositoryInterface $repository, DaemonRepositoryInterface $daemonRepository)
    {
        $this->repository = $repository;
        $this->daemonRepository = $daemonRepository;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request)
    {
        $this->authorize('view-name', $request->attributes->get('server'));
        $this->setRequest($request)->injectJavascript();

        return view('server.settings.name');
    }

    /**
     * Update the stored name for a specific server.
     *
     * @param \Pterodactyl\Http\Requests\Server\Settings\ChangeServerNameRequest $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Pterodactyl\Exceptions\Model\DataValidationException
     * @throws \Pterodactyl\Exceptions\Repository\RecordNotFoundException
     */
    public function update(ChangeServerNameRequest $request): RedirectResponse
    {
        $name = $request->validated();
        $this->repository->update($request->getServer()->id, $name);

        // Update on the daemon.
        try {
            $this->daemonRepository->setServer($request->getServer())->update([
                'name' => $name['name'],
            ]);
        } catch (RequestException $exception) {
            throw new DaemonConnectionException($exception);
        }

        return redirect()->route('server.settings.name', $request->getServer()->uuidShort);
    }
}
