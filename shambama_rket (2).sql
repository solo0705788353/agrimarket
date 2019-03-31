-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 08:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shambama_rket`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_prod`
--

CREATE TABLE `available_prod` (
  `pro_id` int(100) NOT NULL,
  `pro_cat` int(100) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_img` text NOT NULL,
  `pro_price` int(100) NOT NULL,
  `cus_name` text NOT NULL,
  `cus_phone` text NOT NULL,
  `cus_email` text NOT NULL,
  `publicationDate` varchar(50) NOT NULL,
  `county` varchar(100) NOT NULL,
  `exact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_prod`
--

INSERT INTO `available_prod` (`pro_id`, `pro_cat`, `pro_title`, `pro_desc`, `pro_img`, `pro_price`, `cus_name`, `cus_phone`, `cus_email`, `publicationDate`, `county`, `exact`) VALUES
(12, 6, 'Cabbages', '20 shillings per kilogram. Very fresh produce', 'cabbage_PNG8803.png', 20, 'Brian Ngetich', '0724786100', 'bngeth@gmail.com', '2017-02-15', 'Nakuru', 'Mai Mahiu'),
(14, 0, 'Mangoes', 'Mangoes, Fresh from the farm,\r\nExotic Variety.\r\nAvailable on request.', 'mango_PNG9166.png', 25, 'Adam Kamau', '0722336235', 'adam@gmail.com', '2017-04-06', 'machakos', 'matuu'),
(15, 2, 'John Deere Tractor', 'New Condition,great tires', 'tractor.png', 1200000, 'Brian Ngetich', '0726243509', 'brianngetich041@gmail.com', '2017-03-23', 'Narok', 'Narok Town'),
(19, 5, 'Trout Fish', 'Fresh fish from the  Kisumu Fish ponds.', 'laketrout.png', 20, 'Kibichii Washington', '0724786100', 'kibichii33@gmail.com', '2017-04-01', 'Kisumu', 'Near Baba Ndogo'),
(20, 6, 'Nyanya', 'Fresh from the farm', '1489078465212-624788214.jpg', 20, 'Andrew Maina', '+254724786100', 'kibichii33@gmail.com', '2017-03-01', 'kirinyaga', 'mwea'),
(21, 2, 'Lawn Mower', 'Red in colour. 300hp . Slightly used.', 'Screenshot 2017-03-28 at 17.14.33.png', 25000, 'Reuben', '0705914273', 'reubenn6@gmail.com', '2017-03-28', 'Kitale', 'Kibomet'),
(26, 7, 'Onions', 'The onions are high quality and cost 2500 per sack. ', 'IMG_20170507_142325.jpg', 2500, 'Evaline  ', '0723307003', 'eve@gmail.com', 'May 7, 2017 1:51 pm  ', 'Bomet', 'Manaret'),
(27, 3, 'Watermelons', 'I have a huge  number of watermelons down in malindi ready for sale.They are fresh nutritious and indeed very tasty. I am looking for a willing and able buyer to do business with. The starting price Shs 40 but negotiable.', 'images.jpg', 0, 'Isaac ', '0798111834', 'barasaisaac70@gmail.com', 'May 27, 2017 8:43 am  ', 'Kilifi', 'Malindi');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(80) NOT NULL,
  `book_cat` int(100) NOT NULL,
  `book_title` varchar(80) NOT NULL,
  `book_desc` varchar(80) NOT NULL,
  `book_image` varchar(80) NOT NULL,
  `book_price` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_cat`, `book_title`, `book_desc`, `book_image`, `book_price`) VALUES
(1, 7, 'How to Be Rich From Tomato Farming', 'This book transforms a beginner to expert in few easy steps . With the research ', 't.png', '100');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'John Deere'),
(2, 'Ford'),
(3, 'Massey Furgerson'),
(4, 'Yamaha'),
(5, 'Honda'),
(6, 'Organic'),
(7, 'Grafted');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_name` text NOT NULL,
  `icon_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `icon_name`) VALUES
(1, 'Cereals and Pulses', 'wheat.png'),
(2, 'Machinery', 'tractor.png'),
(3, 'Fruits', 'strawberry.png'),
(4, 'Fertiliser', 'fertilizer.png'),
(5, 'Marine', 'images.png'),
(6, 'Vegetables', 'broccoli.png'),
(7, 'Spices', 'spice.png'),
(8, 'Dairy Products', 'cow.png'),
(9, 'Meat and Poultry', 'chicken-1.png'),
(10, 'Services', 'farmer.png'),
(11, 'Flowers', 'sunflower.png'),
(12, 'Natural Honey', 'bee-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `id` int(11) NOT NULL,
  `post_cat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`id`, `post_cat`) VALUES
(1, 'Farming Tips'),
(2, 'Agribusiness Ideas'),
(3, 'Campaign'),
(4, 'Women Empowerment'),
(5, 'Consult us');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `id` int(50) NOT NULL,
  `county_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`id`, `county_name`) VALUES
(1, 'Baringo'),
(2, 'Bomet'),
(3, 'Bungoma'),
(4, 'Busia'),
(5, 'Elgeyo marakwet'),
(6, 'Embu'),
(7, 'Garissa'),
(8, 'Homabay'),
(9, 'Isiolo'),
(10, 'Kajiado'),
(11, 'Kakamega'),
(12, 'Kericho'),
(13, 'Kiambu'),
(14, 'Kilifi'),
(15, 'Kisii'),
(16, 'Kisumu'),
(17, 'Kitui'),
(18, 'Kwale'),
(19, 'Laikipia'),
(20, 'Lamu'),
(21, 'Machakos'),
(22, 'Makueni'),
(23, 'Mandera'),
(24, 'Meru'),
(25, 'Migori'),
(26, 'Marsabit'),
(27, 'Mombasa'),
(28, 'Muranga'),
(29, 'Nairobi'),
(30, 'Nakuru'),
(31, 'Nandi'),
(32, 'Narok'),
(33, 'Nyamira'),
(34, 'Nyandarau'),
(35, 'Nyeri'),
(36, 'Samburu'),
(37, 'Siaya'),
(38, 'Taita Taveta'),
(39, 'Tana River'),
(40, 'Tharaka Nithi'),
(41, 'Tranz Nzoia'),
(42, 'Turkana'),
(43, 'Uasin GIshu'),
(44, 'Vihiga'),
(45, 'Wajir'),
(46, 'West Pokot'),
(47, '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(12) NOT NULL,
  `name` varchar(43) NOT NULL,
  `email` varchar(43) NOT NULL,
  `msg` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `name`, `email`, `msg`) VALUES
(1, 'Kalumba Derick', 'kk22@dero.com', 'Maann..for me i want to buy without coming to you.s'),
(2, 'Mukulu Jonathan', 'mukulu@gmail.com', 'I need land for my farm.'),
(1, 'Kalumba Derick', 'kk22@dero.com', 'Maann..for me i want to buy without coming to you.s'),
(2, 'Mukulu Jonathan', 'mukulu@gmail.com', 'I need land for my farm.');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tbl`
--

CREATE TABLE `posts_tbl` (
  `id` int(112) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_cat` varchar(150) NOT NULL,
  `post_tag` varchar(100) NOT NULL,
  `post_body` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_tbl`
--

INSERT INTO `posts_tbl` (`id`, `post_title`, `post_cat`, `post_tag`, `post_body`, `date`, `file`) VALUES
(21, 'Why consult us', '', '<br /><b>Notice</b>:  Undefined index: tag in <b>C:\\xampp\\htdocs\\web\\web\\blogify\\admin\\editnews.php<', '<center><b>Agribusiness Consulting</b></center>\r\n\r\n<center><b>An Overview</b></center>\r\n\r\n<p>ShambaMarket advises clients from all agribusiness value chains in order to address  strategic, commercial and operational issues. Having completed many of engagements within the diverse agribusiness sector, we are fully aware of the driving forces within agricultural markets, as well as the issues agribusiness entrepreneurs face while seeking to grow and elevate their income streams and experiences.</p>\r\n\r\n<p>ShambaMarket works with both players and investors in agribusiness industry across all sectors of farm management. We deal with crops, livestock and aquaculture value chains, agricultural inputs, equipment,machinery, large-scale cultivation, advertising/marketing , logistics and distribution. Our deep agribusiness sector expertise and growth strategy development capabilities enable us to deliver \r\nuniquely rich insights that lead to meaningful impact to our clients.</p>\r\n<b><p> Core areas of focus include:</p></b>\r\n<p> 1. M&A strategy and transaction support </p>\r\n<p> 2. Go-to-market strategy and execution </p>\r\n<p> 3. Business performance improvement </p>\r\n<p> 4. Strategy activation/execution. </p>\r\n<p><b><center> Client Issues<center></b></p>\r\n\r\n\r\n<p>Based on our expertise in the agribusiness space, we support our clients in addressing critical issues such as:</p>\r\n<p> 1.  How to best respond to global growth trends and opportunities in agribusiness as the global demand for food â€“ particularly proteins â€“ continues to rise</p>\r\n<p> 2. Where to seek growth opportunities â€“ both organic and inorganic â€“ beyond core geographic markets and in adjacent sectors</p>\r\n<p> 3.How to develop an M&A strategy and road map that prioritizes growth pathways and targets  </p>\r\n<p> 4.How to win in existing and new markets vs. established competitors </p>\r\n<p>5. How to integrate acquired companies more effectively to optimize performance and attain strategic goals  </p>\r\n<p> 6.How to develop more effective commercial capabilities and align with customer needs and preferences</p>\r\n\r\n\r\n\r\n\r\n<p><b>We looking forward to working with you</b></p>\r\n<center><b><p> call us : +254-726243509</p></b></center>\r\n<center><b><p> E-Mail us : info@shambamarket.co.ke</p></b></center>', '2016-04-14', '5a.jpeg'),
(25, 'LishaJamii', '3', '<br /><b>Notice</b>:  Undefined index: tag in <b>C:\\xampp\\htdocs\\web\\web\\blogify\\admin\\editnews.php<', '<center><u><b>LishaJamii Campaign and Initiative</b></u></center>\r\n<p> LishaJamii (Feed The Community) is currently an online campaign by ShambaMarket. Here we urge the public to be strict on their diet while also highlighting the fact that there are some people without food here in Kenya. So we try to come up with cheap practical solutions that can be used in the most remote areas of Kenya, so as to be able to help communities get free from the grip of hunger and poverty. And achieve Kenya''s Vision 2030. </p>\r\n\r\n<p>Agriculture brings opportunities for improving nutrition and health all around the globe. <p>\r\n<p>Importance of agriculture on health and nutrition run across a number of channels. One area of importance is communities ability to grow, buy and consume more, better and cheaper food. Over the past years, technologies in agriculture, such as the Green Revolution, led to the doubling of cereal production and yields, improving the well-being of many people and providing a springboard for remarkable economic growth. Bio-fortification efforts to breed crops that are rich in micro-nutrients have improved vitamin and mineral intake among consumers in developing countries across Africa and Asia like Kenya. </p>\r\n\r\n<p> Another importance of agriculture towards nutrition and health is increasing rural community income, this allows people to improve their diets. The poorest of population are overwhelmingly located in remote areas and they get a significant share of their income from the little agricultural activities they do. Given the importance of agriculture for the livelihoods of the rural poor population, growth of agriculture can and will reduce poverty . Agricultural activities can improve Kenya''s economy such as increasing government revenues to fund health, infrastructure and nutrition intervention programs. </p>\r\n\r\n\r\n<p>Despite all the progress, concerns atill remain about the nutrition and health situation throughout the developing world. An estimated 805 million people globally still go hungry and many people also suffer from <b> â€œhidden hungerâ€</b>, that is, deficiencies of essential vitamins and minerals, which are associated with a number of negative health and economic impacts. At the same time, 2.1 billion people worldwide (37% of men and 38% of women) are obese and overweight and this figure is rising (especially in Kenya and Other developing countries), bringing a rise in non-communicable diseases \r\n(such as diabetes, heart disease and some forms of cancer). </p>\r\n\r\n<p>A lot can be done to take advantage of agricultureâ€™s potential to improve nutrition and health in Kenya.</p>\r\n\r\n<center><b>These include:</b></center>\r\n<p>1.improved knowledge on the agriculture-nutrition-health nexus. We need to go beyond a blind pursuit of indiscriminate agricultural growth. Instead, we should promote â€œsmarterâ€ growth by learning more about the health and nutrition impacts of different sub-sectoral patterns of agricultural development. Important steps to build up this knowledge base include investments in research, evaluation and education systems capable of integrating information from all three sectors. </p>\r\n\r\n<p><i>Using this knowledge, strategies should be designed to minimize risks and maximize the benefits to nutrition and health across the entire value chain, from production to consumption. Important steps include the development and dissemination of more nutritious, bio-fortified food consumed by poor people, and public information campaigns and pricing policies that address both under-nutrition and obesity. Our Members of Parliament (MPs) should eliminate distortive subsidies and use the resulting savings to diversify agricultural production and consumption to include more nutritious food products such as beans, vegetables, fruits and dairy products. Such initiatives should also focus on improved processing practices and policies, including better transportation and storage infrastructure that reduces food loss and waste. </i></p>\r\n<p>2.Generating more goal oriented knowledge and strategies requires a policy and research environment in which cooperation and partnerships can thrive across the three sectors. Stakeholders need to move away from jargon, which discourages clear communication, and work towards developing a common language. Partnerships between the private and public sectors play an especially important role in improving the efficiency of post-harvest value chains. A more collaborative approach should start with cross-sector training and education programs alongside clear stakeholder guidelines and responsibilities. </p>\r\n\r\n<p>we all have to work together to assist people overcome poor health and malnutrition. To achieve this, we have to enhance and expand agricultural development, one where agricultural growth is used not only to increase food production but also to enhance nutrition and health. </p>\r\n\r\n\r\n\r\n', '2016-04-16', '3b.jpeg'),
(26, 'ShambaJijini', '3', '<br /><b>Notice</b>:  Undefined index: tag in <b>C:\\xampp\\htdocs\\web\\web\\blogify\\admin\\editnews.php<', '<p><b>What is ShambaJijini?</b></p>\r\n<p>ShambaJijini is a campaign by ShambaMarket to urge the Kenyan urban population to start practicing Urban Agriculture.</p>\r\n<p>Urban agriculture can be defined as the growing of plants and the raising of animals within and around cities. It is integrated into the urban economic and ecological system: whereby urban residents are the workers, urban resources (like organic waste as compost and urban wastewater for irrigation) are used, urban population are the consumers e.t.c. urban agriculture increases when the city grows and does not rely on factors such as rural-urban migration. Looking at it Urban agriculture can become an integral part of the urban system.</p>\r\n<p>Who can be involved in urban agriculture?</p>\r\n<p>1.urban poor. </p>\r\n<p>2.Lower and Mid-level government officials and workers<p>\r\n<p>3. rich people who are seeking a good investment for their capital.<p> \r\n<p>4. Women</p> \r\n<p><b>Where can urban agriculture take place?</b></p>\r\n<p>1. Locations inside the cities (intra-urban)</p>\r\n<p>2. Locations outside the cities (peri-urban areas). </p>\r\n<p>3. Homestead (on-plot)</p> \r\n<p>4. Land away from the residence (off-plot), </p>\r\n<p>5. Private land (owned, leased)</p> \r\n<p>6. Public land (parks, conservation areas, along roads, streams and railways),</p> \r\n<p>7. Semi-public land (schoolyards, grounds of schools and hospitals).</p>\r\n\r\n<p><b>Types of products:</b></p>\r\n<p>Urban agriculture includes food products,from :</p>\r\n<p>1. Crops (grains, root crops, vegetables, mushrooms, fruits)</p>\r\n<p>2. Animals (poultry, rabbits, goats, sheep, cattle, pigs, guinea pigs, fish, etc.) </p>\r\n<p>3.  Non-food products (like aromatic and medicinal herbs, ornamental plants, tree products, etc.) or combinations of these. </p>\r\n<p><b>Often the more perishable and relatively high-valued vegetables and animal products and by-products are favoured.</b> </p>\r\n<p>Production units in urban agriculture in general tend to be more specialised than rural enterprises, and exchanges are taking place across all production units.</p>\r\n<p><b>Types of economic activities</b></p>\r\n<p>Agricultural production,processing and marketing activities as well as inputs (e.g. fertilizer) and services delivery (e.g. vetenary services) by specialised micro-enterprises or NGOs, etc. </p>\r\n<p>Here,<b>production and marketing tend to be more closely interrelated</b> in terms of time and space than for rural agriculture, thanks to greater geographic proximity and quicker resource flow.<p>\r\n\r\n<p><b>Product destination / degree of market orientation</b></p>\r\n<p>An important part of urban agricultural production is for self-consumption, with surpluses being sold. However, the importance of the market-oriented urban agriculture, both in volume and economic value, should not be underestimated. Products are sold at the farm, and within the same or other neighbourhoods, in local shops, on local (farmers) markets or to intermediaries and supermarkets. Mainly fresh products are sold, but part of it is processed for own use, cooked and sold on the streets, or processed and packaged for sale to one of the outlets.</p>\r\n <b><p>Why urban agriculture?</p></b>\r\n<p>1.Urban agriculture provides a complementary strategy to reduce urban poverty and food insecurity while enhancing urban environmental management. </p>\r\n<p>2.Urban agriculture plays an important role in enhancing urban food security since the costs of supplying and distributing food to urban areas based on rural production and imports continue to increase, and do not satisfy the demand, especially of the poorer sectors of the population.</p>\r\n<p>3.Urban agriculture contributes to local economic development, poverty alleviation and social inclusion of the urban poor and women in particular, as well as to the greening of the city and the \r\nproductive reuse of urban wastes (see below for further explanations and examples). </p>\r\n<p>4. Economic impacts-Growing your own food saves household expenditures on food; poor people in poor countries generally spend a substantial part of their income (50 â€“ 70%) on food. Growing the relatively expensive vegetables therefore saves money as well as on bartering of produce. Selling produce (fresh or processed) brings in cash.</p>\r\n<p>5. Social impacts-Urban agriculture may function as an important strategy for poverty alleviation and social integration. We mentioned earlier the positive stimulus it may give to women.</p>\r\n<p>6. Urban ecology impact-Urban agriculture is part of the urban ecological system and can play an important role in the urban environmental management system.</p>\r\n<p>There is so much more to Urban Agriculture,share your views below </p>\r\n', '2016-04-16', '3a.jpg'),
(29, 'Kienyeji Chicken Farming', '1', '<br /><b>Notice</b>:  Undefined index: tag in <b>C:\\xampp\\htdocs\\web\\web\\blogify\\admin\\editnews.php<', '<p>This is the easiest way of earning through farming. It can be stated cheaply without need for specialized equipment or housing. Because with few thousand shillings you can buy a reasonable number of chicken ) are often characterized by their multi-coloured feathers. To increase productivity few farmers crossbreed indigenous chicken with exotic ones. Another factor for crossbreeding is that it improves disease resistance and the chicken will also mature faster.</p>\r\n\r\n<center><b>Requirments:</b></center>\r\n<p>1. Chicken</p>\r\n<p>2. Chicken House</p>\r\n<p>3. Water Traps</p>\r\n<p>4. Chicken Feed</p>\r\n<p>5. Vaccination</p>\r\nOne aspect of managing a successful chicken farm is <b>CLEANLINESS</b>\r\n<center><b>1. Chicken</b></center>\r\nTo get quality and disease free animals,I suggest that you get certified One week old chicks from any certified hatcheries. This move will ensure that you get quality disease free chicks . Another reason is that if you can take care of the week old chicks until they get feathers,then nothing will ever hinder you from being a successful chicken farmer.\r\n\r\n <center><b>2. Chicken House</b></center> \r\n<p>Kienyeji Chicken housing system  has to be weather proof. Weather proof  housing system will keep  birds safe from the adverse weather conditions such as cold, rain, wind, hot sun . The housing system should have the facilities of providing warmth, particularly for young chicks. The house must have to be well ventilated and should protect the birds from harmful predators. Proper ventilation system is very urgent. This keeps the birds healthy and productive. Make sure that your poultry house is well ventilated. Keep proper facilities for entrancing sufficient amount of fresh air and light inside the house. Always clean the house perfectly before bringing the chicks inside the farm. Clear the litter on a regular basis. Wooden or rice bran can be used for making litter for the poultry birds. Keep all the poultry equipment clean and germ free. Clean all equipment on regular basis<p>\r\n<center><b>3. Water Traps</b></center> \r\n<p>Water is life and chicken need alot of clean pure water. Plastic water traps are durable and easy to clean. They are also cheap and are available in almost all hardware stores country-wide. </p>\r\n<center><b>4. Chicken Feed</b></center> \r\n<p>Feeding good quality nutritious food keeps the chucken healthy and productive. High quality fresh foods with availability of all types of nutrient ingredients is the key to success in commercial kienyeji chicken farming business .Success in the poultry farming business mostly depends on feeding quality feed and feed formulation system. For proper growth, egg production and good health, kienyeji chicken require energy. In order to obtain desired growth rate, you must have to purchase and provide highly nutritious chicken feed. Except adequate and quality feeding, you canâ€™t  \r\nrun your business properly. As a kienyeji chicken farmer, you should always produce and sell fresh and healthy birds and quality eggs. For producing quality eggs and meat you have to feed your kienyeji chicken quality feed. This will also help to get maximum returns from your poultry farming business.</p>\r\n\r\n <center><b>4. Vaccination</b></center>\r\n<p>vaccination is commonly used in commercial poultry and increasingly in backyard birds to control disease. Vaccines mimic natural infection, allowing the birds to build up immunity to the disease without any of the harmful effects. This way you can prevent your birds getting the disease.</p>\r\n<p>We will highlight each requirement in detail on another article</p>', '2016-05-04', 'images.jpg'),
(30, 'How To Succeed In Agribusiness', '1', 'Farming tips,Farming For Dummies', '<p>New ideas are quite exciting. Having an agribusiness idea is even more exciting.but if you jump into it without planning,then your odds of ever reaping from it are very slim. So as a farmer you have to ensure that you are up for success whenever a great idea hits you .</p>\r\n\r\n\r\n<p>Success has no shortcut and as an agribusiness entrepreneur you need to proceed with caution and vigilance a step at a time. As ShambaBlog we have trained many farmers in Kenya using a <b>Goal-Oriented Approach</b> specifically tailored to fit the Kenyan farmer scenario.</p>\r\n\r\n\r\n<center><b><p>The 4 Step Approach</p></b></center>\r\n<center><b><p>               1. Think</p></b></center>\r\n\r\n<center><b><p>               2. Plan</p></b></center>\r\n<center><b><p>               3. Implement</p></b></center>\r\n<center><b><p>               4. ManageÂ </p></b></center>\r\n\r\n<center><b><p>                CONCLUSION</p></b></center>\r\n', '2016-05-05', 'eblog_899fa6e7c9592dbfd824e9fe85f1d93b.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `quote` varchar(300) NOT NULL,
  `quote_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `quote_by`) VALUES
(1, 'Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals, and happiness.', 'Thomas Jefferson');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_title` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `site_desc` varchar(350) NOT NULL,
  `site_keyword` varchar(250) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(34) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `email`, `site_desc`, `site_keyword`, `google_code`, `street`, `city`, `country`, `phone`, `facebook`, `twitter`, `linkedin`, `status`) VALUES
(1, 'ShambaBlog', 'ShambaMarket', 'info@shambamarket.co.ke', 'We are an online advertising and marketing platform ', 'Agribusiness,Agriculture,Kenya,Dairy Farming,', '', 'Main', 'Sotik,Bomet County', 'Kenya', '+254-726243509', 'facebook.com/ShambaMarket', '@brianLewenei', 'Brian Ngetich', 'Brian Ngetich');

-- --------------------------------------------------------

--
-- Table structure for table `store_products`
--

CREATE TABLE `store_products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(110) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_products`
--

INSERT INTO `store_products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 0, 0, 'Maize', 29999, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'reuben ', 'reuben@gmail.com', 'rube', '123456', 'your_site_name_689d48257267be75ff4e4db0685013fc.png');

-- --------------------------------------------------------

--
-- Table structure for table `table_ads`
--

CREATE TABLE `table_ads` (
  `id` int(20) NOT NULL,
  `header_ads` varchar(500) NOT NULL,
  `side_ads` varchar(500) NOT NULL,
  `footer_ads` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ads`
--

INSERT INTO `table_ads` (`id`, `header_ads`, `side_ads`, `footer_ads`) VALUES
(1, '<!-- Adtall - Ad Display Code -->\n<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>\n<script>\n  (adsbygoogle = window.adsbygoogle || []).push({\n    google_ad_client: "ca-pub-2129894281242938",\n    enable_page_level_ads: true\n  });\n</script>\n<!-- Adtall - Ad Display Code -->', '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>\n<!-- header_ads -->\n<ins class="adsbygoogle"\n     style="display:block"\n     data-ad-client="ca-pub-2129894281242938"\n     data-ad-slot="8437537000"\n     data-ad-format="auto"></ins>\n<script>\n(adsbygoogle = window.adsbygoogle || []).push({});\n</script>', '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>\n<!-- header_ads -->\n<ins class="adsbygoogle"\n     style="display:block"\n     data-ad-client="ca-pub-2129894281242938"\n     data-ad-slot="8437537000"\n     data-ad-format="auto"></ins>\n<script>\n(adsbygoogle = window.adsbygoogle || []).push({});\n</script>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `body` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `body`) VALUES
(4, '<p>All <em>Idiorm</em> queries start <em>with</em> a call to the for_table static method on the <em>ORM</em> class. ... Method calls which <em>add</em> filters and constraints to your query are then strung together ... either a single instance of the <em>ORM</em> class representing the <em>database</em> row you ...... The <em>ORM</em> class instance(s) returned will contain <em>data</em> for all the columns&nbsp;...</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resources`
--

CREATE TABLE `tbl_resources` (
  `id` int(11) NOT NULL,
  `body` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resources`
--

INSERT INTO `tbl_resources` (`id`, `body`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. <a href="http://localhost/konblog/index.php">Sed tortor.</a> Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(4, 'admin', 'admin', 'Shaftee', 'Sy'),
(3, 'moses', 'moses', 'Moses', 'Gre'),
(4, 'admin', 'admin', 'Shaftee', 'Sy'),
(3, 'moses', 'moses', 'Moses', 'Gre');

-- --------------------------------------------------------

--
-- Table structure for table `transporter`
--

CREATE TABLE `transporter` (
  `t_id` int(30) NOT NULL,
  `t_fname` varchar(15) NOT NULL,
  `t_lname` varchar(15) NOT NULL,
  `t_email` text NOT NULL,
  `t_password` varchar(30) NOT NULL,
  `t_mobile` varchar(30) NOT NULL,
  `t_vtype` varchar(25) NOT NULL,
  `t_county` varchar(25) NOT NULL,
  `t_tonnage` varchar(20) NOT NULL,
  `t_exact` varchar(30) NOT NULL,
  `t_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transporter`
--

INSERT INTO `transporter` (`t_id`, `t_fname`, `t_lname`, `t_email`, `t_password`, `t_mobile`, `t_vtype`, `t_county`, `t_tonnage`, `t_exact`, `t_desc`) VALUES
(1, 'was', 'wasd', 'anuj.lpu1@gmail.com', '123456', '123123', 'truck', 'Kwale', '12', 'asdw', 'tyjyukrutmasdadadadadadadwqeqeqweqeq'),
(2, 'was', 'wasd', 'anuj.lpu1@gmail.com', '123456', '123123', 'truck', 'Kwale', '12', 'asdw', 'tyjyukrutmasdadadadadadadwqeqeqweqeq'),
(3, 'was', 'wasd', 'anuj.lpu1@gmail.com', '123456', '123123', 'truck', 'Kwale', '12', 'asdw', 'tyjyukrutmasdadadadadadadwqeqeqweqeq'),
(4, 'qwsqws', 'sadas', 'dsadas@gmaslds.cpc', '123', '123', 'truck', 'Laikipia', '12', 'dasds', 'qwewq'),
(5, 'qwsqws', 'sadas', 'dsadas@gmaslds.cpc', '', '123', 'truck', 'Laikipia', '12', 'dasds', 'qwewq'),
(6, 'qwsqws', 'sadas', 'dsadas@gmaslds.cpc', '', '123', 'truck', 'Laikipia', '12', 'dasds', 'qwewq'),
(7, 'asdd', 'asdad', 'anuj.lpu1@gmail.com', '123456', '1232213', 'truck', 'Lamu', '1', 'qwewdsa', 'sasdsadwertgrjukyk');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Washington', 'Kibichii', 'kibichii@gmail.com', '123456', '092089203', '1221 Kitale', ''),
(4, 'Ngetich', 'Brian', 'brian@gmail.com', '123456', '0724786100', '2997 Kitale', ''),
(5, 'kevin', 'Wafula', 'masabulekevin@gmail.com', 'kevo1964', '0723066905', '62000', ''),
(6, 'Kibichii ', 'Washington', 'kibichii33@gmail.com', 'Washy0713113', '0724786100', '2997 Kitale', ''),
(7, 'Washington', 'Kibichii', 'student@student.com', '123456', '0724786100', '2997 Kitale', ''),
(8, 'Marian', 'Kayongo ', 'blestfomh@gmail.com ', 'kawowo17', '+254722669', '2438-80100', ''),
(9, 'Marian', 'Kayongo ', 'blestfomh@gmail.com ', 'kawowo17', '+254722669', '2438-80100', ''),
(10, 'EDGAR', 'LISUTSA', 'edgar@universalkenya.com', 'edenno', '733570136', '86437', ''),
(11, 'Brian ', 'Kipkirui ', 'brianngetich041@gmail.com', 'kipkirui1', '0726243509', '2,20406', ''),
(12, 'Brian', 'Kipkirui ', 'brianngetich041@gmail.com', '12345', '888', '2', ''),
(13, 'br', 'ki', 'b@gmail.com', '12345', '12345', '2', ''),
(14, 'br', 'r', 'b@gmail.com', '12345', '12345', '3', ''),
(15, 'g', 'y', 'h@gmail.com', '12345', '12345', '2', ''),
(16, 'Felistus', 'Kago', 'felikago@gmail.com', '5334', '0729073115', '5', ''),
(17, 'Reuben', 'Ndegwa', 'reubenn6@gmail.com', 'terminal1', '0705914273', '1644', ''),
(18, 'Evaline', 'Mutai', 'eve@gmail.com', '12345', '0723307003', '2,Sotik', ''),
(19, 'Joel', 'Melly', 'joekipro@gmail.com', 'melly101', '0710614585', '6114-30100 Eldoret', ''),
(20, 'njoroge', 'gichuru', 'Stevegich@ymail.com', 'kitoto', '0713364225', '166-0900', ''),
(21, 'njoroge', 'gichuru', 'Stevegich@ymail.com', '', '0713364225', '166-0900', ''),
(22, 'john', 'keyler', 'keyler@hotmail.com', 'john123', '+170023452', '0086', ''),
(23, 'kimtai ', 'ronoh', 'kimtaironoh@gmail.com ', 'Angelkiplangat', '0722172067', 'Box990 Sotik', ''),
(24, 'kimtai ', 'ronoh', 'kimtaironoh@gmail.com ', '', '0722172067', 'Box990 Sotik', ''),
(25, 'Brian', 'Ngetich', 'brianngetich@gmail.com', 'kipkirui1', '0726243509', '2', ''),
(26, 'Audrey', 'Cherotich', 'aaudyz7@gmail.com', 'cherotich', '0716219692', '2,Sotik', ''),
(27, 'Jackson', 'Macharia', 'jackngima57@gmail.com', 'jackngima', '0713647816', '', ''),
(28, 'darwin', 'mureti', 'darwinmuret@gmail.com', '32199483', '0718956564', '', ''),
(29, 'darwin', 'mureti', 'darwinmuret@gmail.com', '32199483', '0718956564', '', ''),
(30, 'Koech', 'Harry Cruze', 'Moderntree60@gmail.com', 'password0727', '0727968489', '770', ''),
(31, 'Evaline ', 'Mutai ', 'eve@gmail.com', '12345', '0723307003', '2', ''),
(32, 'vincent', 'ochieng', 'ochiengvinvent85@gmail.com', '1997vincent', '0710994071', '228', ''),
(33, 'Darwin', 'Mureti', 'darwinmuret@gmail.com', '32199483', '0718956564', 'Maua,Meru', ''),
(34, 'Darwin', 'Mureti', 'darwinmuret@gmail.com', '32199483', '0718956564', 'Maua,Meru', ''),
(35, 'b', 'b', 'b@gmail.com', '1234', '789', '6', ''),
(36, 'Darwin', 'Mureti', 'darwinmuret@gmail.com', '32199483', '0718956564', 'Maua Meru', ''),
(37, 'Nelson', 'Irungu', 'nelsonirungu361@gmail.com', '138801996', '0705650134', 'Nyandarua', ''),
(38, 'Simon', 'Mumo', 'Simonmumo7@gmail.com', 'mwanzia', '0714601594', 'Po boz', ''),
(39, 'Kibichii', 'Washington', 'kibichii33@gmail.com', '0713', '0724786100', '2997 Kitale', ''),
(40, 'Isaac', 'Barasa', 'barasaisaac70@gmail.com', '0731558948', '0798111834', 'STRATHMORE UNIVERSITY', ''),
(41, 'Isaac', 'Barasa', 'barasaisaac70@gmail.com', '0731558948', '0798111834', 'STRATHMORE UNIVERSITY', ''),
(42, 'Kibichii', 'Washington', 'kibichii33@gmail.com', '12345', '0724786100', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('0p3bhg6dblvce4gq5o5bbgbsk4', 1493367028);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `youtube_url` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `youtube_url`, `date`) VALUES
(1, 'www.youtube.com/watch?v=hx4i_U8XmO8', '2016-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_prod`
--
ALTER TABLE `available_prod`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_products`
--
ALTER TABLE `store_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ads`
--
ALTER TABLE `table_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporter`
--
ALTER TABLE `transporter`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_prod`
--
ALTER TABLE `available_prod`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  MODIFY `id` int(112) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_ads`
--
ALTER TABLE `table_ads`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transporter`
--
ALTER TABLE `transporter`
  MODIFY `t_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
