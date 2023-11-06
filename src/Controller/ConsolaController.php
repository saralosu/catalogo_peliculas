<?php

namespace App\Controller;

use App\Repository\PeliculaRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ConsolaController extends Command
{
    public static $defaultName = 'app:console-command';
    private $peliculaRepository;

    public function __construct(PeliculaRepository $peliculaRepository)
    {
        $this->peliculaRepository = $peliculaRepository;

        parent::__construct();
    }

    public function configure()
    {
        $this
            ->setDescription('Ejemplo de comando de consola')
            ->addArgument('titulo', InputArgument::REQUIRED, 'Titulo');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $titulo = $input->getArgument('titulo');

        $peliculasFiltradas = $this->peliculaRepository->findByTitulo($titulo);

        dump($peliculasFiltradas);

        return Command::SUCCESS;
    }
}