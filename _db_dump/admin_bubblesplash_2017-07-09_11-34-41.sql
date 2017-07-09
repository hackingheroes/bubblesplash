-- MySQL dump 10.13  Distrib 5.5.55, for Linux (x86_64)
--
-- Host: localhost    Database: admin_bubblesplash
-- ------------------------------------------------------
-- Server version	5.5.55

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `admin_bubblesplash`
--


--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_polish_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `youtube` varchar(400) COLLATE utf8_polish_ci DEFAULT NULL,
  `category` int(2) DEFAULT NULL,
  `article_text` text COLLATE utf8_polish_ci,
  `login1` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (74,'Makeup on Weding','ourimages/20170524063937Wedding-Makeup.jpg','',1,'I’ll never forget the last-minute call I got to do a bride’s makeup on the day of her wedding. As I prepped and primed the wife-to-be, she revealed to me that she and her groom had both lost their significant others on 9/11. And that’s not all: Ten minutes later, she whispered, “I have to let you in on a secret. The only people who know this are our lawyers, financial advisers and you: We already ran off and got married! We’re just doing this [wedding] for our families and everyone else.”\r\n\r\nCupid may have struck twice, but a clear complexion eluded her. For years, the bride was an avid sun worshipper, so her skin was scorched and dull. This, admittedly, gave me a panic attack. I had to figure out a way to fix it immediately. (Ladies, never underestimate the value of a makeup trial.) I ended up applying her foundation with a concealer brush (this is the equivalent of painting an 8 x 10 canvas with a 1 centimeter brush) and mixed foundation with Buxom Divine Goddess Luminizer to give her a luminous look — with full coverage. I was relieved. She was thrilled. Phew.\r\n\r\nThat’s right, your makeup artist will be your confidant (and Houdini) on top of making you look like your best and blushing version of yourself. That’s why choosing the right one is essential (or dare I say, arguably as important as your dress)!\r\n\r\nSo no matter how you plan to celebrate your nuptials — grand, intimate or otherwise — here are some wedding makeup tips I’ve gathered over the year. Listen up, brides!\r\n\r\nFirst, Why It’s Important to Wear Makeup on Your Wedding Day\r\n\r\n    Your wedding day will likely be the most photographed day of your life — not to mention you probably paid good money for your professional photographer and videographer. Plus, your guests will have cell phones and pap you at the ready from all angles. In our digital age, you know your face will end up all over Instagram ready to be “liked” by friends, acquaintances, old flames, high-school, college classmates and total strangers. Not that you really care what they think, but let them all feel pangs of FOMO as you look stunning on your special day!\r\n    Swaths of white, ivory, cream and champagne fabric make everyone look washed out. (Please don’t take offense, but think about how drab you look in a white robe. Don’t fret: We all look drab in this garb.) Your wedding makeup should highlight features on your face that otherwise look erased.\r\n    Your whole look, including your dress, veil, bouquet, shoes, hair and makeup, should have a balanced and harmonious effect. Think about it this way: Let’s think about the components of your favorite dinner: homemade chips + guacamole, fish tacos and margaritas. You’ve got sweet, savory, spicy, crunchy and mushy = perfection! You could skip out on one, but you won’t fully feel satisfied and will continue to have remorse when the pictures surface.\r\n\r\nWedding Makeup Planning for Neophytes\r\n\r\nBook a trial with a makeup artist three to six months in advance of your wedding. Have makeup inspiration photos at the ready, whether they’re from Pinterest or pages from Elle you stole from the hair salon. If you’re collaborating with a new makeup artist, their version of natural, defined or dramatic may be way different than yours. It’s all relative.\r\n\r\nWhen in doubt, reference a photo. Find pictures for each particular feature if you can’t find a single one that demonstrates every single aspect of your face. If you have old pictures of yourself rocking makeup looks you love, be sure to show them as a reference point. A pic with your general day-to-day makeup look is also helpful so they can get a sense of your comfort zone. Use this as an opportunity for creative collaboration and show them your dress, flowers, tablescapes, hair, veil and color scheme. Your makeup artist can give you suggestions on your makeup palette based on all the aforementioned.   \r\n\r\nYou may have to book multiple makeup trials to find the right person. In addition to being your makeup artist, this person is an unofficial therapist/liaison for the big day, as it’s likely they will be the only other person (apart from your spouse) who will be up in your grill for a whole hour. Make sure you like their energy to help offset any nervousness you may feel on the day.\r\n\r\nDecide on airbrush foundation or regular. Some brides are adamant that airbrushed foundation is the way to go, as it can deliver a certain level of flawlessness that regular foundation cannot. I completely disagree, but if you’re curious, by all means try it. It’s better to get a beautiful makeup application than a lackluster airbrush foundation app for the sake of it. It’s ultimately a personal preference. And remember, airbrush makeup will likely cost you more.  \r\n\r\nPhotograph your makeup trial makeup within multiple lighting scenarios. You know what I mean. There are probably some areas of your house where your makeup looks flawless, while other mirrors show off all your pores. Same goes for wedding day.\r\n\r\nDon’t be surprised by your fiancee’s feedback about your makeup trial — good and bad. If he or she loves it, great. If not, decide in advance if you care enough to adjust it.\r\n\r\nMake a beauty emergency kit. Contents in this bag should include: double-sided tape, Altoids, bandages, protein bar and/or nuts, blotting papers, safety pins, deodorant, tampon (god forbid), Advil, powder and lipstick. Ask your makeup artist about your wedding day lipstick colors. Purchase the lip products yourself or have the artist purchase them for you.\r\n\r\nThe Special Day\r\n\r\nEat a meal before you sit down for hair and makeup because it’s go-time thereafter. You may feel a loss of appetite due to nerves, but make sure you have protein in your system. A hangry bride with a glass or two of champagne is a bad look.  \r\n\r\nGlam may take just as long — if not longer — than you anticipated simply because of nerves and lots of little distractions like floral deliveries, slews of last minute incoming texts or your great Auntie wants to wish you well before the ceremony. Plan accordingly.\r\n\r\nIf possible, have your glam squad stick around for photos after the ceremony or a makeup change later in the day. Sometimes, after unexpected tears of joy, false eyelashes start to take on a life of their own. I’ve found that grooms, too, bask in getting a dusting of powder, concealer or anti-shine mattifier.\r\n\r\nGive your beauty emergency kit to someone who will be in close proximity to you that day/night. They can stash it under a chair or table and tag along with you on runs to the ladies room. This person should have no qualms about telling you that you have lipstick or black pepper in your teeth at your wedding (or any day for that matter)!',''),(76,'Face contouring','ourimages/20170525125910kon.jpg','',5,'Jak nadać twarzy trójwymiarowości? Przy użyciu odpowiednich kosmetyków do konturowania, które właściwie nałożone doskonale wymodelują kształt twarzy i nadadzą jej upragnionego wyglądu. W tym celu potrzebujemy bronzera, który będzie przyciemniał i podkreślał wgłębienia oraz rozświetlacza do uwydatnienia wypukłości. Doskonale w modelowaniu sprawdzą się również korektory i podkłady w sztyfcie w jasnej i ciemnej kolorystyce, które używane są w celu ujednolicenia kolorytu twarzy bądź też do ukrywania drobnych zmian skórnych.\r\n\r\nKorygowanie odpowiednich partii twarzy, ma na celu uzyskanie jej owalnego kształtu, który w powszechnej opinii uznawany jest za idealny. Poniższy mini poradnik wraz z grafiką opisuje najważniejsze reguły konturowania, które pozwolą stworzyć właściwą grę światła i cieni i osiągnąć doskonałą symetrię twarzy!',''),(77,'How to make your nails strong?','ourimages/2017052501111318620265_1347466795335755_4048166655727714761_n.jpg','',3,'Which girl doesn\'t want long and strong nails? You can also make your dream come true! Here you have some helpful advices \r\n1. Stop biting your nails. Biting your nails is detrimental to your health. Although a regular nervous habit for many, it can cause bacterial skin infections on your hands and in your mouth. If you have dry or loose skin around your nail beds, make sure to clip them away rather than biting them off.\r\n2. Stop wearing acrylics and gels. Rushed removal of acrylic or gel nails leaves your nails dry, brittle, and unlikely to grow. Even proper removal can damage your nails because it occurs with soaked nail-beds. When your nail beds are wet, they are most sensitive.\r\n3. Get plenty of Vitamin H (biotin). Biotin promotes the growth and strength of nails, hair, and skin. Aim to consume between 30 and 40 micrograms per day either through food or supplements. Whole grains, mushrooms, bananas, salmon, and avocado are all great sources of biotin.\r\n4. \r\nCare properly for your cuticles. Soak your nails in warm water for 5 minutes to loosen your cuticles. Put a cuticle remover on your nails and use a cuticle stick to push the dead skin back. Rinse off the remover and debris. Do this up to 4 times a week.\r\nIf you followed this advices, you  will get beautiful nails! \r\n\r\n\r\n\r\nsource: http://www.wikihow.com/Grow-Long,-Strong-Nails',''),(78,'Egg and coconut oil hair mask','ourimages/20170525013259ddbb61fea594065232cc9fec7bf266f8.jpg','',4,'Our mask can make your hair healthy and strong!\r\nRecipe:\r\n1 Egg Yolk\r\n2 Tbsp. Coconut Oil\r\n1 Tbsp. Honey\r\nDouble recipe for long hair. Combine ingredients in a blender or whisk ingredients together until well-blended. Apply the mask evenly throughout damp hair, making sure to cover damaged ends. If you have long hair, tie it up. Then, cover hair with a shower cap or towel and let the mask sit for 30 minutes. Wash out the mask with shampoo and conditioner. For best results, apply the mask once weekly.',''),(79,'Banana and coconut oli mask ',NULL,'',4,'Banana, Avocado and Coconut Oil Hair Mask\r\nThis is the perfect example of making the most of less than perfect fruit. Just take an overripe banana and mix it with a ripe avocado and a tablespoon of coconut oil.\r\n\r\n\r\n\r\n\r\nImage: Pinterest via Hello Nature\r\nRead more at http://www.thefashionspot.com',''),(80,'Banana and coconut oli mask ','ourimages/201705250158407ec58dd93abeb663d7925db69a2836a2.jpg','',4,'Banana, Avocado and Coconut Oil Hair Mask\r\nThis is the perfect example of making the most of less than perfect fruit. Just take an overripe banana and mix it with a ripe avocado and a tablespoon of coconut oil.\r\n\r\n\r\n\r\n\r\nImage: Pinterest via Hello Nature\r\nRead more at http://www.thefashionspot.com',''),(81,'How to pair eyeshadows?','ourimages/20170525020306Eye-Shadow-Combinations-for-a-Beautiful-Look.jpg','',1,'THREE BASIC RULES OF PAIRING EYESHADOWS TOGETHER\r\n\r\nAlways include a neutral –  Using a neutral eyeshadow along any brighter shades you may use will keep the look more wearable and tone down the overall look.\r\nAlways mix your finishes – Eyeshadows come in finishes, shimmer and matte. Using all shimmer on your eyes will make you look like a disco ball while using just matte finish eyeshadows will look to flat. Using a combination of both with give depth and detail to the look.\r\nUse a light, medium and dark color – A mixture of these three, regardless of the color scheme, will give you a well rounded look with a lot of dimension.',''),(82,'Health food','ourimages/20170525022031food-pyramid-2.jpg','',6,'Eat the correct balance of the following vitamins and minerals to supply hair and nails with all that it needs to remain shiny, lustrous and strong...\r\n-Protein \r\n        \"Your hair needs protein to produce keratin, the proteins that make hair strong,\" says Dr. Zeichner. \"If hair doesn\'t receive enough protein, it can go into a \'resting phase,\' causing noticeable hair loss,\" adds Beth Warren, author of Living a Real Life with Real Food. Try adding a scoop of whey protein to your morning smoothie for simple boost.\r\n-Red meat\r\nA juicy steak is loaded with protein, and it also has another nutrient that\'s important for hair and nail health: iron. \"People with iron-deficiency anemia often have thin hair,\" says Dr. Zeichner. And according the American Family Physician, iron-deficiency is associated with koilonychia—a nail disease characterized by spoon-shaped nails. That doesn\'t mean you should eat red meat every day of the week. Red meat is high in saturated fat, and eating a lot of it has been associated with an increased risk of several health problems including heart disease, several types of cancer, and type 2 diabetes. But you can safely indulge in a lean cut of beef once a week. If you think you may be deficient in iron, talk to your doctor about starting a supplement.\r\n\r\n-Blueberries\r\n\"Antioxidants help protect your body\'s cells against free radical damage,\" says Erin Palinski, RD, author of Belly Fat Diet For Dummies. \"This damage increases stress hormones and inflammation, which impacts all cells in the body, including those in the hair and nails.\" Among other fruits and dark greens, Palinski calls out blueberries: \"They have one of the highest antioxidant properties of all fruits,\" she says.\r\n\r\n-Almonds\r\nNot only are almonds a good source of protein, they\'re loaded with magnesium, which helps maintain healthy hair and nails. \"Magnesium is Mother Nature\'s anti-stress mineral, and stress is a major factor in hair loss,\" explains Ashley Koff, RD. \"Vertical ridges in your nails may be a sign of inadequate magnesium,\" adds Palinski. You can also get more magnesium through leafy greens, cacao nibs, and soybeans.\r\n\r\n-Beer\r\nBeer is one of the richest sources of silicon in the average diet, says research from the Journal of the Science of Food and Agriculture. \"Silicon is a trace mineral thought to increase circulation to the scalp, which is good news for hair growth,\" says Rebecca Kazin, MD, dermatologist at the Washington Institute of Dermatologic Laser Surgery and the Johns Hopkins Department of Dermatology. That explains why a daily 10-milligram silicon supplement was shown to reduce hair and nail brittleness after 20 weeks, according to the Archives of Dermatological Research. No need to go overboard, though: Most single servings of beer contain more than 10 milligrams of silicon. Experts recommend that having no more than one drink a day if you\'re a woman, and two if you\'re a man.\r\n\r\n-Oysters\r\n\"Zinc is needed for many biological processes, including making proteins like those in your hair and nails,\" explains Dr. Zeichner. Oysters have 74 grams of zinc per serving, far more than any other food, says the National Institutes of Health. Not lucky enough to eat oysters every day? Beef, poultry, fortified cereals, and baked beans can also help you up your intake.',''),(83,'testt','ourimages/20170525043151Zrzut ekranu 2017-05-25 o 15.28.14.png','',1,'okok',''),(84,'9999','ourimages/2017062103161117522619_1740390446252322_4156854370465289521_n.jpg','',1,'gtyhtcv','');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `last_name` varchar(150) COLLATE utf8_polish_ci DEFAULT NULL,
  `birthday` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `bio` text COLLATE utf8_polish_ci,
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `e-mail` (`email`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (10,'test','testowe','12','Female','poland','hehe','hehe@jp100pro.pl','polska','ppppp',NULL);
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-09  4:34:59

