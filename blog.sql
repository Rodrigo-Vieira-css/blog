-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 02:48
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `data` date NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `data`, `image`) VALUES
(5, 'Onça pintada', 'Onças-pardas, também conhecidas como pumas ou leões-da-montanha, exibem pouquíssima variação nas cores da pelagem em geral, em sua maioria, são tons terrosos suaves de bege e cinza.', '2022-06-10', 'uploads/onçaBranca.jpg'),
(6, 'Arara azul', 'A arara-azul-grande é a maior representante da família Psittacidae. Das quatro espécies de araras-azuis tipicamente sul-americanas — a arara-azul-de lear, a arara-azul-pequena e a ararinha-azul —, a arara-azul-grande é a maior representante.', '2022-06-10', 'uploads/araraAzul.jpg'),
(7, 'Onça Pintada', 'A onça-pintada ou jaguar, também conhecida como onça-preta, é uma espécie de mamífero carnívoro da família dos felídeos encontrada nas Américas. É o terceiro maior felino do mundo, após o tigre e o leão, e o maior do continente americano', '2022-06-10', 'uploads/4.jpg'),
(8, 'Leão', 'O leão [feminino: leoa] é uma espécie de mamífero carnívoro do gênero Panthera e da família Felidae. A espécie é atualmente encontrada na África subsaariana e na Ásia, com uma única população remanescente em perigo, no Parque Nacional da Floresta de Gir, Gujarat, Índia.', '2022-06-10', 'uploads/6.jpg'),
(9, 'Pinguin', 'O pinguim é uma ave da família Spheniscidae, altamente modificadas para a uma vida aquática, sendo suas asas adaptadas para promover impulso através da água.', '2022-06-10', 'uploads/7.jpg'),
(10, 'Periquito', 'Periquito é o nome comum de várias espécies pertencentes à família Psittacidae que se alimenta essencialmente de sementes. O nome não corresponde a nenhuma classe taxonômica e é usado para referir as aves menores deste grupo.', '2022-06-10', 'uploads/8.jpg'),
(11, 'Coelho', 'Coelho é um animal mamífero que pertence à ordem Lagomorpha e família Leporidae. Diferentemente do que muitas pessoas pensam, os coelhos não são roedores, pois não fazem parte da ordem Rodentia. Na família Leporidae, além de coelhos, estão incluídos animais conhecidos como lebres, as quais possuem orelhas maiores e pernas mais compridas que as dos coelhos.', '2022-06-10', 'uploads/9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Rodrigo', 'Rodrigo23@gmail.com', '12345'),
(2, 'Rodrigo Santos Vieira Da Silva', 'Rodrigo243@gmail.com', '3bbfdde8842a5c44a032'),
(3, 'Rodrigo Santos Vieira Da Silva', 'Rodrigo23@gmail.com', '1f6419b1cbe79c71410c'),
(4, 'Rodrigo Santos Vieira Da Silva', 'rodrigo2santos22@gma', '3bbfdde8842a5c44a032'),
(5, 'rodrigo', 'rodrigo2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
