-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Avril 2017 à 13:55
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `price` float NOT NULL,
  `picture` text NOT NULL,
  `stock` int(4) NOT NULL,
  `id_category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `content`, `price`, `picture`, `stock`, `id_category`) VALUES
(1, 'The first édition', 'Part of the First Editions range of single cask expressions from independent bottler Hunter Laing & Co., this Speyside single malt was distilled in 1989 at Braes of Glenlivet distillery (now known as Braeval) and matured in a refill hogshead for 27 years before bottling in 2017. Bottled at its natural colour with no chill-filtration at a cask strength of 54.9% abv, only 144 have been produced.\n\nThe nose offers digestive biscuit and soft caramel with a hint of red berries. The palate brings vanilla custard before a fruity red berry and apple medley. The finish is long and pleasant with a slight sweetness lingering.', 180, 'img/whisky/article1.jpg', 2, 0),
(2, 'Auchentochan', 'A limited edition bottling from the Lowlands distillery, this Auchentoshan expression has spent eight years maturing in bourbon barrels before being transferred to the finest Saint-Julien Bordeaux wine casks for a further twelve years. Distilled in 1988 and released in 2008, only 1,800 bottles have been produced.\n\nRuby red in colour with ripe summer fruits on the nose. The palate brings fresh eucalyptus notes, mixed berries and a sweet nuttiness. The finish is velvety smooth and long lasting.', 58, 'img/whisky/article2.jpg', 2, 0),
(3, 'The BenRiach', '10 years in the making and the new Benriach (the first under the new ownership) is finally here!\n\n This BenRiach 10 Year Old marks a significant milestone – it is the first expression from the Benriach core range to be created predominantly from whiskies distilled at BenRiach since Billy Walker took over in 2004.\n\nNatural tawny amber in colour from a mix of American and European oak casks, it has a fruity top-note (fresh apple, with a hint of powdered ginger) with a vanilla sponge base; these aromas are well translated by the taste, which is sweet overall, with light acidity, referencing peaches and lemon zest; a creamy texture and a long, warming finish. \n\nBenRiach fans will not be disappointed with soft and rich notes coming to the fore. Typical sherry notes all also in the mix which all BenRiach fans will be truly excited about.', 45, 'img/whisky/article5.jpg', 2, 0),
(5, 'Glenfarclas', 'Since 1865 Glenfarclas has been owned and managed by just one family, the Grants of Glenfarclas. To this day Glenfarclas is one of only a few distilleries in Scotland to remain family owned and managed and is now in the hands of the fifth and sixth generation of the family. The Grants remain committed to the vision of creating the best quality Single Highland Malt Scotch Whisky. Glenfarclas is renowned for producing Single Highland Malt Scotch Whisky in the traditional Speyside style, with a heavy Sherry influence and one of the delights of Glenfarclas is exploring the subtle differences between the different expressions. Let the rich dark golden 22 Year Old breathe a little or add a drop or two of water to fully open up the indulgent dram.', 340, 'img/whisky/article7.jpg', 3, 0),
(6, 'Glenfiddich 18 ans', ' This expression of the world’s best-selling single malt has been matured in a mix of ex-sherry casks and former bourbon barrels, which gives it greater complexity than its younger siblings.  The nose offers raisins, sultanas, vanilla and a dusting of cinnamon over apple. Full-bodied and creamy in the mouth, with sherry, dried fruits and brittle toffee. The finish is lengthy, with toffee and ginger. This is a cracking dram! ', 80, 'img/whisky/article9.jpg', 3, 0),
(7, 'Glenfiddich', 'The 15 Year Old expression is a truly special single malt that exemplifies the family''s tradition of innovation. Its warm, spicy flavours are created using a technique pioneered by the Malt Master, David Stewart, and continued to this day.  Aged for at least 15 years in a combination of European, American, and New American oak to carefully release the virgin cask flavours, the whisky is then mellowed in a unique Solera vat before being married in Portuguese oak tuns.', 1200, 'img/whisky/article10.jpg', 3, 0),
(8, 'IPA Experiment', 'Corn, malt and oats were used in the mash recipe and the barrels were filled on April 30, 2002, then aged on the 7th floor of Warehouse I for 9 years and 5 months before bottling in 2011. The similar Rice Bourbon Experiment used a different mash recipe, but the barrels were filled on the same date and stored for the same time in the same warehouse location, allowing the drinker to taste the influence of the different mash recipe.  The result here is a pleasantly smoky nose with a rich aroma of toasted oats that offers a nice complexity. On the palette, the smokiness intrigues as hints of dried fig and stone fruit come through, and eventually give way to an earthy finish.', 86, 'img/whisky/article11.jpg', 3, 0),
(9, 'Nikka', 'Get to know this unique spirit and enjoy an exceptional tasting as Nikka brand ambassador Stanislav Vadrna guides you through the art of Japanese bartending and the ICHIGO ICHIE philosophy of one meeting, one encounter.  This gift pack comes ready to serve with a bottle of Nikka From The Barrel blended whisky, a cocktail glass and a pourer.', 80, 'img/whisky/article13.jpg', 3, 0),
(10, 'Penderyn', 'Penderyn Peated Single Malt Welsh Whisky is a limited bottling of approximately 5,000 per year. Completely hand crafted, the unique distillation and maturation produces a single malt whisky in which a soft and unique spirit underlies a medium peaty character with light golden tone.', 57, 'img/whisky/article16.jpg', 3, 0),
(11, 'Casa Magna', 'Casa Magna Colorado is the brainchild of two of the cigar industry''s most revered manufacturers, Manuel Quesada and Nestor Plascencia. This Nicaraguan Puro is full-bodied and moderately priced. Comprised of Ligero and Viso fillers from several different regions of Nicaragua and a beautiful Cuban-seed Ligero Colorado wrapper, the Casa Magna is hand-rolled in Plascencia''s Nicaraguan Factory. The result is a smooth, rich, full-bodied cigar with undertones of coffee and sweet spices. A well-made slow-burner at a great price. \n', 6, 'img/cigar/cigar2.jpg', 20, 1),
(12, 'Partagás', 'An attractive sun-grown beauty unlike any other Partagas cigar blend.\n\nPartagas Black is an enticing full-bodied cigar, full and rich. Partagas'' gorgeous, oily, medio tiempo sun-grown wrappers and large rings (54-60) are the perfect vehicles to deliver the powerful blend of Nicaraguan and Cuban-seed ligero fillers. Excellent construction, a gentle draw, and rich, robust character make this a bold and enticing cigar.\n\nPartagas Black Label received a well-deserved 90-rating noting: "This alluring cigar has an herbal flavor. It develops a rich, earthy character and fills out with a nutty taste."', 9, 'img/cigar/cigar3.jpg', 18, 1),
(13, 'Davidoff', 'A fire spittin’ Griffin\n\nOh yeah, this Griffin’s spittin’ some fire. A favorite among the wine and cheese crowd, The Griffin’s are usually mentioned in the same breath as Ashton, Diamond Crown, and Davidoff – which makes sense because they’re made by Davidoff – and to this point have been known for their elegant and creamy flavor profile. This is where The Griffin’s Nicaragua enters the picture and brings the heat. \n\nThe Griffin’s Nicaragua is the first time this brand has utilized tobaccos from Nicaragua and Honduras. Medium to full-bodied, edging towards the fuller end of the spectrum, The Griffin’s Nicaragua comes draped in a Nicaraguan Habano wrapper atop a blend of Nicaraguan and Honduran long-fillers. You’ll be instantly hit with spice and pepper before the profile progresses to include notes of cream, cedar, hay, and coffee. If you’ve been looking for a premium, balanced, and complex medium to full-bodied blend, you won’t go wrong with The Griffin’s Nicaragua. \n\n​', 9, 'img/cigar/cigar4.jpg', 27, 1),
(14, 'Cohiba', 'Here''s the deal: I''ve compiled 20 top-notch Churchills from the world''s biggest and most high-end brands, packed them in a gorgeous glasstop humidor, and discounted the heck out of it. Over $250 off, 69% below MSRP, call it what you will. But no matter what you call it, this deal is killer. Treat yourself to the best and enjoy unthinkable savings on the delicious, prestigious Montecristo and Cohiba brands. Big flavor, big Churchills, big brands, big discount...tiny price. Put a bow on it and call it a day.', 18, 'img/cigar/cigar5.jpg', 8, 1),
(15, 'Padrón	', 'Padron cigars are a series of robust Nicaraguan handmades boasting a deep and complex flavor. This brand continually gets high marks for consistency, and as such enjoys a loyal and enduring fan base.\n\nPadron cigars are Nicaraguan puros, as all of the leaves utilized to create the cigar are cultivated from the fertile soils of Esteli, Nicaragua. This mesmerizing mixture of hearty tobaccos produces a rich, robust smoke and offers a complex array of flavor capped off with a sweet finish.\n\nPadron....best of the best. A collection of Padron''s finest make up this premium sampler. Available in either Natural or Maduro.', 32, 'img/cigar/cigar6.jpg', 2, 1),
(16, 'Nicaragua Habanos', 'If you thought Tatuaje was tough to say, try Cabaiguan on for size!\n\nCabaiguan is hand-crafted by Jose ''Don Pepin'' Garcia in the El Rey de los Habanos factory, the same factory as Tatuaje, 5 Vegas Miami, and a series of Don Pepin Garcia cigars. Tough to say, but easy to burn, this mild to medium-bodied blend employs a smooth Connecticut seed wrapper grown under the valley mist of Ecuador. Inside, a Cuban-seed mixture of Nicaraguan long-fillers is carefully blended to promote a flavorful cigar layered with rich, hearty nuances.', 11, 'img/cigar/cigar1.jpg', 45, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `whisky` int(1) NOT NULL,
  `cigard` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `genre` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `birthday`, `password`, `genre`) VALUES
(1, 'Renato', 'DURIEZ', 'renato.duriez@gmail.com', '1995-04-21', 'ceciestmdp0', 'M');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
