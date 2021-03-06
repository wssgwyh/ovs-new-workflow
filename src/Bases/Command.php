<?php namespace Arcanedev\LogViewer\Bases;

use Arcanedev\LogViewer\Contracts\LogViewerInterface;
use Arcanedev\Support\Bases\Command as BaseCommand;

/**
 * Class     Command
 *
 * @package  Arcanedev\LogViewer\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class Command extends BaseCommand
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /** @var LogViewerInterface */
    protected $logViewer;

    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Create the command instance.
     *
     * @param  LogViewerInterface  $logViewer
     */
    public function __construct(LogViewerInterface $logViewer)
    {
        parent::__construct();

        $this->logViewer = $logViewer;
    }

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Display LogViewer Logo and Copyrights.
     */
    protected function displayLogViewer()
    {
        // LOGO
        $this->comment('   __                   _                        ');
        $this->comment('  / /  ___   __ _/\   /(_) _____      _____ _ __ ');
        $this->comment(' / /  / _ \ / _` \ \ / / |/ _ \ \ /\ / / _ \ \'__|');
        $this->comment('/ /__| (_) | (_| |\ V /| |  __/\ V  V /  __/ |   ');
        $this->comment('\____/\___/ \__, | \_/ |_|\___| \_/\_/ \___|_|   ');
        $this->comment('            |___/                                ');
        $this->line('');

        // Copyright
        $this->comment('Version ' . $this->logViewer->version() . ' - Created by ARCANEDEV' . chr(169));
        $this->line('');
    }
}
