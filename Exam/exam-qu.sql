-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 04:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$x68BpUhPrsQyg9cekGr1uuKK59wlHR0OVHu9Sx3y.qRCtMu9M2Che');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answer1` varchar(50) DEFAULT NULL,
  `answer2` varchar(50) DEFAULT NULL,
  `answer3` varchar(50) DEFAULT NULL,
  `answer4` varchar(50) DEFAULT NULL,
  `correct_answer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer1`, `answer2`, `answer3`, `answer4`, `correct_answer`) VALUES
(26, 'Hydrogen', 'Oxygen', 'Carbon', 'Nitrogen', '2'),
(27, 'Cycas', 'Drynaria', 'Pinus', 'Mimosa', '2'),
(28, 'Watt', 'Joule', 'Volt', 'Ampere', '1'),
(29, 'Na2O', 'MgO', 'SO2', 'Al2O3', '1'),
(30, 'Tracheids', 'Sieve tube elements', 'Parenchyma', 'Collenchyma', '2'),
(31, 'Newtons 3rd low', 'Newtons 1st low', 'Archimedes Principle', 'Newtons 2nd low', '1'),
(32, '3 and III', '2 and vii', '3 and vii', '3 and i', '3'),
(33, ' Vass deferens', 'Epididymis', 'Prostrate gland', 'Seminiferous tubules', '4'),
(34, 'H O and  N', 'Na Mg and K', 'C H and Cl', 'H Li and C', '2'),
(35, 'Vitamin A', 'Vitamin B', 'Vitamin C', 'Vitamin D', '4'),
(36, 'No of neutrons', 'No of protons', 'No of electrons', 'No of protons and electrons', '3'),
(37, 'MCl2', 'M2Cl', 'M2Cl2', 'MCl', '1'),
(38, 'The positioning of stamens and stigma of a flower ', 'Androecium or Gynoecium is matured earlier', 'Large amount of pollen are produced in the anther', 'Bearing of pistilate flowers and staminate flowers', '3'),
(39, 'producing soda with CO2', 'producing alcohol with yeast', 'producing bio gas by decomposition of the sewage', 'producing rice with large amount of vitamin A', '4'),
(40, 'Weigh 10 cm3 ethyl alcohol accurately and add 500 ', 'Weigh 10 cm3 of water accurately and add 500 cm3  ', 'Weigh 10 cm3 ethyl alcohol accurately and add up t', 'Weigh  10 cm3 of water accurately and add up to  5', '3'),
(41, 'microwaves, infra- red waves, visible light, x - r', 'x – rays, visible light, infra- red waves, microwa', 'visible light, microwaves, x – rays, infra- red wa', 'infra- red waves, x – rays, microwaves, visible li', '2'),
(42, 'Focus', 'between focus and center', 'Center', 'between focus and pole', '1'),
(43, 'Focus', 'between focus and center', 'Center', 'between focus and pole', '1'),
(44, 'Focus', 'between focus and center', 'Center', 'between focus and pole', '1'),
(45, 'Zero', 'Equal to sum of two applied forces.', 'Equal to difference of two applied forces', 'Equal to the magnitude of large force', '1'),
(46, 'Dissolve 40 g  of NaoH in 500 ml of water', 'Dissolve 20 g  of NaoH in 500 ml of water.', 'Dissolve 40 g  of NaoH in small volume of water an', 'Dissolve 20g of NaoH in small volume of water and ', '4'),
(47, 'Albinism', 'Haemophilia', 'Thalassemia', 'Colour blindness', '1'),
(48, 'By using of mouth and nose covers can be avoided.', 'People should not stay in places  where are too cr', 'Doctors and government must control the disease.', 'all people should contribute to control the spread', '4'),
(49, 'Amylase', 'Lactase', 'Pepsin', 'Sucrase', '3'),
(50, 'As starch', 'As glucose', 'As sucrose', 'As amino acid', '3'),
(51, 'Weight', 'Volume', 'Density', 'Mass', '1'),
(52, 'Compounds of carbon', 'Allotropic forms of carbon', 'Molecules of carbon', 'Different physical states of carbon', '2'),
(53, 'Electron and proton', 'Electron and neutron', 'Proton and neutron', 'Electron, proton and neutron', '3'),
(54, 'Capillaries of  arteries', 'Capillaries of veins', 'Capillaries of arteries and veins', 'Capillaries of arteries and lymphatic capillaries.', '1'),
(55, 'Lipid', 'Starch', 'Water', 'Protein', '3'),
(56, '12', '15', '17', '20', '1'),
(57, 'Testes', 'prostrate gland', 'Seminal vessicles', 'Epididymis', '4'),
(58, 'Albinism', 'Haemophillia', 'Thalassemia', 'Red - green colour blindness', '3'),
(59, 'Star fish, slug', 'Slug, cuttle fish', 'Sea urchin, Star fish', 'Dolphin, whale', '3'),
(60, 'Red blood cells', 'White blood cells', 'Platelets', 'Blood plasma', '3'),
(61, 'Compound, Element, Homogeneous mixture', 'Element\" Element , Heterogenous mixture', 'Element\" Compound, Homogeneous mixture', 'Element\" Compound, Heterogenous mixture', '3'),
(62, 'Should precipitate', 'Should be insoluble', 'Should be soluble well.', 'Should be soluble slightly.', '3'),
(63, 'Dissolving soap in hard water.', 'Applying baking soda for the stings of hornets.', 'Giving a salt solution for a person who had drunk ', 'Giving milk of magnesia solution for a person who ', '4'),
(64, 'Resistor', 'Diode', 'Transistor', 'Capacitor', '3'),
(65, 'Resistor', 'Diode', 'Transistor', 'Capacitor', '3'),
(66, 'Conductors of alloys', 'Pure semi conductors.', 'Pure conductors', 'Super conductors', '4'),
(67, 'Carbon, Calcium Carbonate, Air', 'Calcium Carbonate, Calcium  Silicate, Air', 'Calcium Carbonate, Calcium   aluminate, air', 'Carbon, Calcium Carbonate, Calcium  Silicate', '1'),
(68, 'Infra- red rays', 'Micro waves', 'Radio waves', 'Ultra sound', '1'),
(69, 'Prevent the marriages between blood relatives.', 'Immediately take medical treatments after identify', 'Take foods with more iron during the pregnancy per', 'Do a blood checkup before the marriage and prevent', '4'),
(70, 'Different pitch', 'Different  loudness', 'Different amplitude', 'Different quality of sound', '1'),
(71, 'Enters to the space from the other side.', 'Finally stay remains in the centre by oscillating ', 'Return back after passing the centre.', 'Stay remain in the centre.', '2'),
(72, 'Food is abundant in houses.', 'There is less effort to make nests.', 'More chances to protect from predators.', 'There is a cold temperature inside houses than out', '3'),
(73, 'Vitamin A', 'Vitamin B', 'Vitamin D', 'Vitamin K', '4'),
(74, 'Sodium', 'Magnesium', 'Aluminium', 'Sulphur', '3'),
(75, 'Acceleration of the object', 'Displacement done in the motion', 'Displacement done in a unit time', 'Total time taken by the object for the motion', '2'),
(76, 'To develop the body of multicellular organisms. ', 'For the asexual reproduction of some organisms', 'Maintain a constant number of chromosomes from gen', 'Replacement of new cells for dead cells when heali', '3'),
(77, 'Bacteria', 'Virus', 'Amoeba', 'Paramecium', '2'),
(78, 'Absence of a vertebral column', 'Live in wet or aquatic environments', 'All organisms are being warm blooded', 'Presence of a muscular foot and a visceral mass', '4'),
(79, 'Follicular phase', ' Menstrual phase', 'Proliferation phase', ' Secretory phase', '2'),
(80, 'Follicular phase', ' Menstrual phase', 'Proliferation phase', ' Secretory phase', '2'),
(81, 'Increasing the length and cross sectional area', 'Decreasing the length and the cross sectional area', 'Increasing the length and decreasing the cross sec', 'Decreasing the length and increasing the cross sec', '3'),
(82, 'Attached ear lobes and free ear lobes', ' Hairs being curly and not being curly', 'Ability and the inability of rolling tongue', ' Syndactyly and polydactyly', '4'),
(83, 'Electromagnetic waves', 'Infra sound waves', 'Ultra sound waves', ' X rays', '3'),
(84, 'Wash with water\" Boil in water\" Boil in alcohol an', 'Boil in water\" Boil in Alcohol\" Wash with water\" a', 'Boil in Alcohol\" Wash with water\" Boil in water\" a', 'Boil in water\" Boil in alcohol\" Add iodine solutio', '4'),
(85, 'Coldness transfers from the hand to the ice crysta', 'Coldness transfers from ice crystal to the hand.', 'A part of the heat from the hand transfer to the i', 'A part of the heat from the ice crystal transfer t', '2'),
(86, 'Retain for a long period of time.', 'Can pass from one organism to another', 'Become active as biochemical.', 'Being substances which are insoluble in water or f', '4'),
(87, ' NaOH  and KOH  ', 'NaOH  and NH4OH', 'NH4OH and CH3COOH', 'NH4OH and KOH', '2'),
(88, 'The dynamic frictional force remains constant when', 'The dynamic frictional force is greater than the l', 'When increasing the external force, the limiting f', 'The frictional force become zero, when the object ', '1'),
(89, '120 J ', '240 J ', '432000J ', '864000 J ', '4'),
(90, '120 J ', '240 J ', '432000J ', '864000 J ', '4'),
(91, 'Prevent the flow of energy through food chains', 'Flow of non-degradable matters through food chains', 'Not receiving the foods for the organisms in food ', 'Not cycling the elements between the environment a', '4'),
(92, 'Production of electricity by wind power technology', 'Use the difference of temperature between the surf', 'The technology to operate machines using alcohol', 'Production of power using geothermal energy', '1'),
(93, 'Production of electricity by wind power technology', 'Use the difference of temperature between the surf', 'The technology to operate machines using alcohol', 'Production of power using geothermal energy', '1'),
(94, 'Production of electricity by wind power technology', 'Use the difference of temperature between the surf', 'The technology to operate machines using alcohol', 'Production of power using geothermal energy', '1'),
(95, 'Applying a white paint after polishing.', 'Applying dark paints after polishing. ', 'Applying a white paint without polishing.', 'Applying dark paints without polishing.', '1'),
(96, 'It is not sufficient to use in srilanka', 'The Sulphur content of it is being a higher amount', 'Muthurajawela is being a wet land', 'Lots of money should be expended to obtain the pea', '2'),
(97, 'dry fire wood', 'germinating seed', 'Coconut shell', 'Ice cube', '2'),
(98, 'dry fire wood', 'germinating seed', 'Coconut shell', 'Ice cube', '2'),
(99, '2, 1', '2, 8, 1', '2, 8, 9', '2, 8, 8, 1', '4'),
(100, 'distance, speed, time', 'speed, velocity, time', 'displacement, velocity, acceleration', 'speed, velocity, acceleration', '3'),
(101, 'delays blood clotting', 'Occurs anaemia', 'Occurs rickets', 'weakening of gum', '1'),
(102, '30 Hg cm', '60 Hg cm', '76 Hg cm', '86 Hg cm', '3'),
(103, 'Cocos Nucifera', 'Cocos  nucifera', 'cocos nucifera', 'COCOS nucifera', '2'),
(104, 'make intermolecular bonds', 'Polymerize', 'make molecular lattice', 'make an ionic lattice', '1'),
(105, 'increases gradually', 'decreases gradually', 'not change', 'first increases, later decreases', '2'),
(106, 'due to occurring meiosis', 'due to producing spores', 'due to occurring mitosis only', 'due to obtaining offsprings identical to mother', '1'),
(107, 'identify the possession of inherited characteristi', 'identify the possession of contrasting characters', 'Understand how to use the scientific method effect', 'Understand the pollination off pea plant naturally', '3'),
(108, 'It is believed that marriage between blood relatio', 'The marriage between blood relatives causes recess', 'The marriage between blood relatives causes death ', 'The marriage between blood relatives does not caus', '2'),
(109, 'Monosaccharide', 'Amino acid', 'Fatty acid', 'Glycerol', '2'),
(110, 'Only protons', 'Protons and neutrons', 'Protons and electrons', 'Protons, neutrons and electrons', '2'),
(111, 'g', 'Kg', 'N', 'Nm', '3'),
(112, 'sucrose', 'cellulose', 'glycogen', 'starch', '3'),
(113, 'C', 'H', 'O', 'N', '4'),
(114, 'Mg', 'B', 'Ca', 'Al', '1'),
(115, 'Mg', 'B', 'Ca', 'Al', '1'),
(116, 'A and B', 'B and C', 'C and D', 'D and E', '3'),
(117, 'Applying rubber covers on pedals of motorbikes.', 'Applying pair of tyres for rear wheels of a vehicl', 'Etching grooves on foot of slipper.', 'Etching grooves on the surface of tyres.', '2'),
(118, 'Cell wall and Ribosome', 'Ribosome and chloroplast', 'Chloroplast and mitochondria', 'Mitochondria and golgi complex', '3'),
(119, 'Cell wall and Ribosome', 'Ribosome and chloroplast', 'Chloroplast and mitochondria', 'Mitochondria and golgi complex', '3'),
(120, 'valency', 'first ionisation energy.', 'electronegativity', 'isotopes', '2'),
(121, '0.5 N', '2 N', '8 N', '18 N', '1'),
(122, 'Solvent property.', 'Coolant property.', 'Flowing property.', 'Less specific heat capacity.', '2'),
(123, 'enzymes', 'hormones', 'biomolecules', 'vitamins', '1'),
(124, 'Li, Be,  B, O', 'Mg, Ca, Be, O', 'Na , Al, F, C', 'Na, Mg, Al, Si', '2'),
(125, 'Does not act on an object at rest.', 'Dynamic friction is slightly more than the limitin', 'Always opposes to the motion of an object.', 'Act between two surfaces oppose to their relative ', '4'),
(126, 'for the growth of multicellular organisms.', 'as an asexual reproduction method', 'replacement of new cells for dead cells', 'evolution due to variations.', '4'),
(127, 'A', 'B', 'C', 'D', '1'),
(128, 'a cell belongs to body of unicellular organisms.', 'a cell belongs to body of multicellular organisms.', 'a cell that can be observed by microscopes.', 'a cell prepared by including all the organelles.', '4'),
(129, 'High proteins', 'Amino acids', 'Enzymes', 'Antibodies', '3'),
(130, 'Vertical height of the liquid column, Density of l', 'Liquid volume, Density of liquid and Gravitational', 'Density of liquid, Gravitational acceleration and ', 'Vertical height of the liquid column, Density of l', '1'),
(131, 'Vertical height of the liquid column, Density of l', 'Liquid volume, Density of liquid and Gravitational', 'Density of liquid, Gravitational acceleration and ', 'Vertical height of the liquid column, Density of l', '1'),
(132, '2', '8', '18', '32', '2'),
(133, 'Uniform velocity', 'Uniform deceleration', 'Uniform acceleration', 'Acceleration which increases gradually', '3'),
(134, 'AIDS', 'Gonorrhea', 'Genital warts', 'Herpes', '2'),
(135, 'Take place in diploid as well as haploid cells', 'One mother cell produces two daughter cells', 'Daughter cells are identical to the mother cell in', 'Daughter cell receive half number of chromosomes a', '4'),
(136, '33', '58', '60', '88', '3'),
(137, '33', '58', '60', '88', '3'),
(138, 'Bacteria, virus and yeast', 'Virus, yeast and euglena', 'Yeast, amoeba and sea anemone', 'Amoeba, sea anemone and bacteria.', '1'),
(139, 'Mg, Zn, Cu and K', ' Mg, Zn, Hg and K', ' Na, Zn, Au and Fe', 'Mg, Zn, Fe and Na', '4'),
(140, 'The static friction takes a constant value', 'The dynamic friction takes a constant value', 'The dynamic frictional force is slightly greater t', 'The frictional force takes a minimum value at the ', '2');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade`) VALUES
('10-A');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL DEFAULT 0,
  `subject_id` int(11) NOT NULL DEFAULT 0,
  `type` varchar(50) NOT NULL DEFAULT '0',
  `question_low` int(11) DEFAULT 0,
  `question_medium` int(11) DEFAULT 0,
  `question_high` int(11) DEFAULT 0,
  `question_random` int(11) DEFAULT 0,
  `time_duration` int(11) NOT NULL DEFAULT 0,
  `grade` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `teacher_id`, `subject_id`, `type`, `question_low`, `question_medium`, `question_high`, `question_random`, `time_duration`, `grade`) VALUES
(1, 26, 1, 'Model paper1', 9, 8, 12, 11, 70, '10-D'),
(2, 26, 5, 'efdfdf', 0, 0, 0, 0, 0, '00:00:00'),
(3, 26, 5, 'Model23', 0, 0, 0, 0, 0, '00:00:00'),
(5, 26, 5, 'fgf', 12, 8, 10, 10, 60, '10-A'),
(6, 26, 1, 'sdsd', 7, 11, 8, 14, 85, '10-A'),
(7, 26, 4, 'dsdsd', 11, 7, 12, 10, 105, '10-A'),
(8, 26, 4, 'sdd', 12, 10, 14, 4, 40, '10-A'),
(9, 26, 1, 'qqqqq', 8, 6, 11, 15, 10, '10-A'),
(10, 26, 1, 'wwwwwwww', 8, 9, 11, 12, 90, '10-A'),
(11, 26, 4, 'jk', 10, 9, 12, 9, 60, '10-A'),
(12, 26, 1, 'Pass paper', 0, 0, 0, 0, 75, '11'),
(13, 26, 1, 'Model 21', 8, 11, 8, 13, 65, '10-A');

-- --------------------------------------------------------

--
-- Table structure for table `pass_paper`
--

CREATE TABLE `pass_paper` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `time_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_paper`
--

INSERT INTO `pass_paper` (`id`, `teacher_id`, `subject_id`, `type`, `grade`, `time_duration`) VALUES
(1, 26, 4, '$type', '$grade', 100),
(2, 26, 4, 'sdsd', 'sdsd', 75),
(3, 26, 1, 'Pass Paper 1', '11', 65);

-- --------------------------------------------------------

--
-- Table structure for table `quctions`
--

CREATE TABLE `quctions` (
  `id` int(11) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `paper_id` int(11) NOT NULL DEFAULT 0,
  `subject_id` int(11) NOT NULL DEFAULT 0,
  `anwser_id` int(11) NOT NULL DEFAULT 0,
  `quction` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quctions`
--

INSERT INTO `quctions` (`id`, `difficulty`, `paper_id`, `subject_id`, `anwser_id`, `quction`) VALUES
(20, 'high', 1, 8, 26, 'Which of the following is the most common chemical element in organisms by mass?'),
(21, 'low', 1, 8, 27, 'The non-flowering plant produces spores.'),
(22, 'high', 1, 8, 28, 'What is the standard unit for measuring power?'),
(23, 'medium', 1, 8, 29, 'Which of the following oxides form an acidic solution with water'),
(24, 'low', 1, 8, 30, 'The living cell without a nucleus is,'),
(25, 'high', 1, 8, 31, 'The plank moved in the opposite direction of the bird as it flew over a small plank on the water. What is the law that describe these phenomena?'),
(26, 'medium', 1, 8, 32, 'The electron configuration of a particular element is 2, 8, 7. What is the period and the group that element belong respectively.'),
(27, 'high', 1, 8, 33, 'The structure that produces the human sperm.'),
(28, 'low', 1, 8, 34, 'What is the only choice for elements that get noble gas configuration by removing electrons?'),
(29, 'medium', 1, 8, 35, 'Which of the following vitamin is deficient in cell division?'),
(30, 'high', 1, 8, 36, 'What change in the M  atom takes place when the M2+ ion is formed?'),
(31, 'low', 1, 8, 37, 'What is the compound formed by element M reacted with  Cl2?'),
(32, 'medium', 1, 8, 38, 'What is not an adaptation for cross-pollination of a flower?'),
(33, 'low', 1, 8, 39, 'The instance where can be applied the gene technology is'),
(34, 'high', 1, 8, 40, 'To prepare 500 cm3  a solution of ethyl alcohol of composition 0.02 (V/V)  (C2H5OH)'),
(35, 'low', 1, 8, 41, 'The answer is in the order in which the wavelength of electromagnetic waves is increasing gradually from microwaves, x - rays, visible light and infrared waves.'),
(38, 'high', 1, 8, 44, 'The place where the light source should be kept in front of the concave mirror to send the light beam to a long distance is,'),
(39, 'medium', 1, 8, 45, 'An object is at the rest because two forces are acting on it in opposite directions. At this point what is the resultant force applied to the object?'),
(40, 'low', 1, 8, 46, 'Select the correct statements to prepare 1 mol dm-3  Sodium hydroxide solution. (Na = 23 O = 16 H = 1)'),
(41, 'high', 1, 8, 47, 'Select the name of the disease which infected only to the males because of sex linked recessive gene.'),
(42, 'low', 1, 8, 48, 'One of the most controversial diseases of the year 2020 is the coronavirus infection. What is the most accurate clause to prevent this virus from becoming infected?'),
(43, 'high', 1, 8, 49, 'An enzyme contained in the human stomach is,'),
(44, 'medium', 1, 8, 50, 'The foods in plants are transported as which compound?'),
(45, 'low', 1, 8, 51, 'Which of the following quantities of an object get changed when changing the gravitational force?'),
(46, 'medium', 1, 8, 52, 'Graphite and diamonds are,'),
(47, 'high', 1, 8, 53, 'The sub-atomic particles which have the highest contribution to the mass of an atom are,'),
(48, 'low', 1, 8, 54, 'The basic structural unit of a kidney is the nephron. The glomerule of  a nephron is made up of,'),
(49, 'medium', 1, 8, 55, 'An inorganic compound contained in the living body is,'),
(50, 'high', 1, 8, 56, 'The relative molecular mass of the compound XH4   is 16. If  H = 1 What is the relative atomic mass of X'),
(51, 'low', 1, 8, 57, 'What is the structure of humans which stores the sperms temporarily?'),
(52, 'high', 1, 8, 58, 'A defect caused due to the mutation of a gene which is responsible for the production of haemoglobin in a somatic chromosome is'),
(53, 'medium', 1, 8, 59, 'Select the answer which contains two animals belonging to an animal group which shows evolutionary relationships with the group vertebrates.'),
(54, 'low', 1, 8, 60, 'The doctor who tested the blood of a person who was suffering from fever for several days said that this health condition is dengue, The most possible component in blood to take that decision would be'),
(55, 'high', 1, 8, 61, 'The correct statement regarding the graphite, glucose and air respectively is'),
(56, 'low', 1, 8, 62, 'The pure liquids hexane and heptane are mixed to form a liquid homogeneous mixture. The iodine is readily soluble in hexane. According to the above facts, the iodine in heptane.'),
(57, 'high', 1, 8, 63, 'What is the answer which shows a situation where a neutralization reaction takes place.'),
(59, 'medium', 1, 8, 65, 'A resistor, transistor, Diode and a capacitor are enclosed in four boxes separately so as to remain only their terminals outside. The component which can identify from the number of terminals only is'),
(60, 'low', 1, 8, 66, 'Which one out of the followings shows lowest resistivity in the conduction of electricity.'),
(61, 'medium', 1, 8, 67, 'During the extraction of iron, the substances added to the blast furnace except iron ore is'),
(62, 'high', 1, 8, 68, 'A remote control works using'),
(63, 'low', 1, 8, 69, 'Tbe measure to be taken to prevent from thalassemia disease is'),
(64, 'medium', 1, 8, 70, 'When identical coins of one rupee and two rupee were released from a same height on to the same cement floor in the same manner, the reason for the difference of sound produced is, both sounds have a'),
(65, 'high', 1, 8, 71, 'If a transparent hole is made along the centre of the earth and a stone is released perpendicular to it, what happens is'),
(66, 'low', 1, 8, 72, 'Certain birds live in present cities make their nests near the places like lamp covers. The main reason for this would be,'),
(67, 'high', 1, 8, 73, 'The deficiency of which vitamin delays the clotting of blood when there is a wound ?'),
(68, 'medium', 1, 8, 74, 'What is the element which forms an amphoteric oxide when react with oxygen ?'),
(69, 'low', 1, 8, 75, 'The quantity that can be calculated from the area of the geometrical figure between the graph line and the time axis of a velocity-time graph is '),
(70, 'high', 1, 8, 76, 'What is the importance of meiosis out of the followings?'),
(71, 'low', 1, 8, 77, 'What is the type of living entity which cannot be separated as living or non-living ?'),
(72, 'medium', 1, 8, 78, 'What is the feature which can be seen only in the group Mollusca ?'),
(73, 'low', 1, 8, 81, 'The factors which increase the resistance of a conductor are'),
(74, 'high', 1, 8, 82, 'What is the rarely seen inherited characteristic of humans out of the following'),
(75, 'medium', 1, 8, 83, 'The astronauts used for their communication is'),
(76, 'low', 1, 8, 84, 'When the correct sequences of activity are indicated to test the production of starch in leaves'),
(77, 'medium', 1, 8, 85, 'A coldness is felt when a crystal of ice is touched with the hand. The reason for this would be'),
(78, 'high', 1, 8, 86, 'Bioaccumulation can be expressed as a direct influence of environmental pollution. Which is not a feature of bio accumulated substances.'),
(79, 'low', 1, 8, 87, 'When a strong base and a weak base are indicated respectively.'),
(80, 'medium', 1, 8, 88, 'What is the correct statement regarding the frictional force, when an object is kept on a uniform surface?'),
(82, 'high', 1, 8, 90, 'The headlamps of a motor vehicle have two bulbs of 60W power. What is the electrical energy consumed when this motor car travels for two hours with headlamps on?'),
(83, 'low', 1, 8, 91, 'A problem caused due to the absence of decomposers in the environment is'),
(86, 'medium', 1, 8, 94, 'A type of renewable energy used at present in Sri Lanka is'),
(87, 'high', 1, 8, 95, 'The walls of a room should be prepared in which way to get the maximum efficiency of light which is supplied to a room.'),
(88, 'low', 1, 8, 96, 'Although a peat deposit has been found in Muthurajawela, what is the main reason for not using it as fuel? '),
(90, 'medium', 1, 8, 98, 'Select the living substance from the substances given below.'),
(91, 'low', 1, 8, 99, 'The atomic number of potassium is 19. The electronic configuration of Potassium is,'),
(92, 'high', 1, 8, 100, 'Select the answer which only contains vector quantities.'),
(93, 'low', 1, 8, 101, 'Due to the deficiency of vitamin K,'),
(94, 'medium', 1, 8, 102, 'The atmospheric pressure at the sea level is,'),
(95, 'high', 1, 8, 103, 'Which is the correct way of starting the scientific name of the coconut tree'),
(96, 'low', 1, 8, 104, 'Due to the polarization, water molecule'),
(97, 'medium', 1, 8, 105, 'When moving up from the sea level, the atmospheric pressure'),
(98, 'high', 1, 8, 106, 'Sexual reproduction differs from asexual reproduction,'),
(99, 'low', 1, 8, 107, 'The experiment done by Gregor Mender about the transmission of inherited characteristics is important for students who study science because you can.'),
(100, 'medium', 1, 8, 108, 'The marriage between blood relations is considered to be unsuitable. As a student who studying genetics, how do you explain this?'),
(101, 'high', 1, 8, 109, 'What is the building unit of protein?'),
(102, 'low', 1, 8, 110, 'The nucleus of an atom consists of'),
(103, 'medium', 1, 8, 111, 'The standard unit of measuring the weight of an object is,'),
(104, 'low', 1, 8, 112, 'A polysaccharide stored in an animal body is,'),
(105, 'high', 1, 8, 113, 'An element that presents in nucleic acids but not in lipids is,'),
(107, 'medium', 1, 8, 115, ' The element which is in the 3rd period and 2nd group of the periodic table is'),
(108, 'low', 1, 8, 116, 'Water-soluble and fat-soluble vitamins are given respectively.'),
(109, 'high', 1, 8, 117, 'This is not a strategy applied to increase friction.'),
(111, 'low', 1, 8, 119, 'Organelles in which photosynthesis and respiration occur respectively.'),
(112, 'low', 1, 8, 120, 'The minimum energy that should be supplied to an atom in the gaseous state to remove an electron from a unipositive gaseous ion is called.'),
(113, 'medium', 1, 8, 121, 'What is the force required to give an acceleration of 3 m s-2  to an object with a mass of  6 kg?'),
(114, 'high', 1, 8, 122, 'What is the property of water that contributes to regulating body temperature?'),
(115, 'low', 1, 8, 123, 'All the biochemical reactions that take place in the cell or body of organisms are catalyzed by proteins called,'),
(116, 'medium', 1, 8, 124, 'Select the answer that consists of elements with a valency of 2,'),
(117, 'low', 1, 8, 125, 'Which of the following is true regarding friction?'),
(118, 'high', 1, 8, 126, 'A significance of miosis is,'),
(119, 'medium', 1, 8, 127, 'Blisters have appeared on the knees and elbows of a child who suffered from a deficiency disease. Identify the relevant vitamin for the above deficiency symptom'),
(120, 'low', 1, 8, 128, 'A typical cell is,'),
(121, 'low', 1, 8, 129, 'The proteins which catalyze the chemical reactions in a cell or body are known as'),
(123, 'medium', 1, 8, 131, 'What are the factors which affect the pressure created by a liquid column?'),
(124, 'low', 1, 8, 132, 'The maximum number of electrons that may present in the M energy level of the first 20 elements in the periodic table is'),
(125, 'high', 1, 1, 133, 'The nature of the motion of a fruit which was released from its petiole is,'),
(126, 'low', 1, 8, 134, 'What is a disease which is sexually transmitted by a bacterium?'),
(127, 'medium', 1, 8, 135, 'What is the correct statement regarding meiosis?'),
(129, 'high', 1, 8, 137, 'What is the relative molecular mass of CO( NH2)2 molecule? ( C= 12, H = 1, O = 16, N = 14)'),
(130, 'low', 1, 8, 138, 'The living forms which are difficult to recognize as living things and nonliving objects are'),
(131, 'medium', 1, 8, 139, 'What is the alternative which contains elements that can displace hydrogen from diluted hydrochloric acid?'),
(132, 'high', 1, 8, 140, 'When friction is created on a moving object by contact surfaces');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `nic`, `address`, `gender`, `username`, `password`, `email`, `mobileNo`, `grade`) VALUES
(1, 'Test Student', '971470160v', 'No21,Test Lance,Test', 'male', 'student1', 'student', 'student1@test.com', '0777123456', '10-A'),
(2, 'Test Student', '971470160v', 'No21,Test Lance,Test', 'male', 'student1', '$2y$10$./F3jj4P8pRLBV5fyhkio.DMiXsa7yENVpD5yhr5PzKkGaF6gGsIq', 'student1@test.com', '0777123456', '10-A'),
(3, 'Test Student', '971470160v', 'No21,Test Lance,Test', 'female', 'student1', '$2y$10$iM80p9zH7Pf7/GFy6tko3.t7QQdbZjvt.AyKsriz5seg0PwadHoKq', 'student1@test.com', '0777123456', '10-A'),
(4, 'Test Student', '971470160v', 'No21,Test Lance,Test', 'male', 'student1', '$2y$10$GX9V1t3B7HoohhqTrJm8Je4Q.2J.7iKIHplkCmPvX5rfu.YfaqCn2', 'student1@test.com', '0777123456', '10-A'),
(10, 'test web', '787878787', '5487,sweyuwmd,agetes', 'male', '2323', '$2y$10$RhlJV3f3aP2ZKTGno3MxD.GCtl4uNBPqK1XXD.EuF0NsF53gs36e6', 'test@gamilc.om', '1234567890', '10-A'),
(11, 'test web', '787878787', '5487,sweyuwmd,agetes', 'male', '2323', '$2y$10$DZmdXSvs7zad2mDQaEUEqeVxnL8pSalT6YxJn.0XzlPxEaN28orWi', 'test@gamilc.om', '1234567890', '10-A'),
(12, 'test web', '787878787', '5487,sweyuwmd,agetes', 'male', '2323', '$2y$10$3d98VYjFHbaOyECCCbhGJ.NLm..uQTs7VpoqOTs2iWpNV1SjXM5T.', 'test@gamilc.om', '', '10-A'),
(13, 'test web1', '7878787871', '5487,sweyuwmd,agetes1', 'female', '2323ww', '$2y$10$r2mYlGaCWLLrqvdvYe2Bce62pfShzj9HK9v3V6c4yhW.YHXuQoU', 'test@gamilc.om2', '2', '10-A'),
(14, '12', '12', '12', 'male', '', '$2y$10$TAFoxaZVIMVjqc2EePHgeeFLe6vZAbkZBtc2mNJIYTFXSo6YkP3ES', '12@gmail.com', '2322222222', '10-A'),
(15, '12', '12', '12', 'male', '123456', '$2y$10$1du6Q59bMRR0Y/pwRzlloeyf3v1kUn//LZaaOLgdGGeeXrcHx9rWW', '12@gmail.com', '2322222222', '10-A'),
(16, '12', '12', '12', 'male', '123456', '$2y$10$/KVYbc0rG/2q2UA7Br09Deqasj1cXZLtX.lJSVCUx9lVwcp0hmyo.', '12@gmail.com', '2322222222', '10-A'),
(17, '12', '12', '12', 'male', '', '$2y$10$lWvHiIr9vBVd2KTxR4RqFO/CLfTDGSdl/QtNYheHUul1UAKMRycKe', '12@gmail.com', '2322222222', '10-A'),
(18, '12', '12', '12', 'male', '', '$2y$10$VAw8U9v2z1SBZz57tl3kGe/dude4EAzZAfKptXwTE16Qu4kXnZvUa', '12@gmail.com', '2322222222', '10-A'),
(19, '1-web', '1111111111', '1111', 'male', '232323', '$2y$10$ydvCc6NKYuZei9nXIO/SVOiZ2KExTWu324MV9LdMjSVf.mhlG.cNS', '1dsd@gmail.com', '123456789', '10-A'),
(20, '1-web', '1111111111', '1111', 'male', '232323', '$2y$10$V5pDftQobATjO3Y9/Ygo2.tIsE1s.OUDrGP9LL7vJq6S8hL0T4MQq', '1dsd@gmail.com', '123456789', '10-A'),
(21, '12+web', '23232', '2323', 'male', '2323', '$2y$10$x68BpUhPrsQyg9cekGr1uuKK59wlHR0OVHu9Sx3y.qRCtMu9M2Che', 'student@exam.com', '123456789', '10-A'),
(22, '22', '22222222222', '22', 'male', '222', '$2y$10$BnKlwUMmB6cOk3l/ZeYxNucGP7YqfY0/TqdutpKPhQzusSjw/d6qK', 'sdsd@gmial.com', '123456', '10-A'),
(23, '22', '222222', '22', 'male', '222', '$2y$10$LmTSUQX0cXGpVY05UxxvkucfkerYS6Xg.zZEJXin5pKLVtQHfV8KG', 'sd@gmail.com', '123456789', '10-A'),
(24, 'Janindu', '34343', '34/1', 'male', '33', '$2y$10$GbSmxBj6M0Bv3pcIdUURuekw5l3VtaxyucdzXW32u13U5dVwkpCKS', 'admin@gmail.com', '54545454', '10-A'),
(25, 'www', '12', '1330', 'male', '', '$2y$10$fj3.nyo4i.FcyWct2ng/5OW7h6piXh7dXDdt2DG.wQP3o42z6JVdq', 'sdasd@ad.com', '0750329565', '10-A');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL DEFAULT '0',
  `grade` varchar(25) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `description`, `grade`) VALUES
(1, 'English', 'basic English22', '11-D'),
(4, 'qw', 'qw', '11-B'),
(5, 'sd', 'sd', '11-D'),
(8, 'Science', 'o/l science', '10-D');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `qualifications` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `nic`, `address`, `gender`, `username`, `password`, `email`, `mobileNo`, `qualifications`) VALUES
(26, 'Teacher1', '78787888', 'No99,Test Road, Test', 'male', 'teacher01', '$2y$10$x68BpUhPrsQyg9cekGr1uuKK59wlHR0OVHu9Sx3y.qRCtMu9M2Che', 'teacher@exam.com', '0777123456', 'Bsc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_paper_teacher` (`teacher_id`),
  ADD KEY `FK_paper_subject` (`subject_id`);

--
-- Indexes for table `pass_paper`
--
ALTER TABLE `pass_paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pass_paper_teacher` (`teacher_id`),
  ADD KEY `FK_pass_paper_subject` (`subject_id`);

--
-- Indexes for table `quctions`
--
ALTER TABLE `quctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__paper` (`paper_id`),
  ADD KEY `FK__subject` (`subject_id`),
  ADD KEY `FK_quctions_answer` (`anwser_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pass_paper`
--
ALTER TABLE `pass_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quctions`
--
ALTER TABLE `quctions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `FK_paper_subject` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `FK_paper_teacher` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pass_paper`
--
ALTER TABLE `pass_paper`
  ADD CONSTRAINT `FK_pass_paper_subject` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pass_paper_teacher` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quctions`
--
ALTER TABLE `quctions`
  ADD CONSTRAINT `FK__paper` FOREIGN KEY (`paper_id`) REFERENCES `paper` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__subject` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_quctions_answer` FOREIGN KEY (`anwser_id`) REFERENCES `answer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
