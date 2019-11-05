# Library-MVC

Simple CRUD with PHP Native.

## Getting Started

### Database
Table structure for table `books`

```bash
CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `ISBN` varchar(50) DEFAULT NULL,
  `published` date DEFAULT NULL
)
```

Indexes for table `books`
```bash
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`);
)
```

AUTO_INCREMENT for table `books`
```bash
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;
```

Dumping data for table `books`
```bash
INSERT INTO `books` (`id`, `title`, `author`, `ISBN`, `published`) VALUES
(1, 'The Land Before Time VII: The Stone of Cold Fire', 'Ambrosi Gerwood', '679-91-9542', '2012-10-28'),
(2, 'The Message', 'Melvyn Hatchette', '275-58-2468', '2007-10-29'),
(3, 'Insignificance', 'Bethanne Vise', '425-77-7895', '2011-10-15'),
(4, 'Inbetweeners Movie, The', 'Stefan Siaspinski', '305-95-7698', '2009-08-26'),
(5, 'Hello, Dolly!', 'Jamil Spaunton', '589-49-1324', '2019-03-10'),
(6, 'American Adobo', 'Chlo Stickford', '323-99-7089', '2019-07-24'),
(7, 'Hello Again', 'Willard Halsall', '600-22-1475', '2001-09-18'),
(8, 'Gift, The', 'Andrus Klaves', '601-60-4192', '2013-11-26'),
(9, 'Law of Desire (Ley del deseo, La)', 'Gilberto Tonks', '879-81-0352', '2003-07-30'),
(11, 'The Siege of Firebase Gloria', 'Corbet Possek', '288-32-9484', '2004-05-27'),
(12, 'Love Steaks', 'Reeta Corbould', '624-39-8159', '2016-02-20'),
(13, 'Andromeda Strain, The', 'Cori Barszczewski', '517-57-7969', '2004-02-15'),
(14, 'Son of Frankenstein', 'Doralin Dovydenas', '302-30-0318', '2012-02-29'),
(15, 'Sun Valley Serenade', 'Reed Stadding', '612-28-7304', '2011-10-08'),
(17, 'Hitler: The Rise of Evil', 'Maegan Bruineman', '759-41-1599', '2001-08-20'),
(19, 'Swan and the Wanderer, The (Kulkuri ja joutsen)', 'Tresa Ferrucci', '449-08-6533', '2017-11-06'),
(20, 'Whisky Galore', 'Nels Featherstonhalgh', '362-58-4401', '2002-11-14'),
(21, 'Watch the Birdie', 'Elisabeth Willmett', '149-12-7716', '2016-03-29'),
(22, 'King of the Hill', 'Staffard Dilgarno', '249-69-3024', '2006-01-01'),
(23, 'Open Water', 'Lisetta Geekie', '174-31-4033', '2013-12-12'),
(24, 'Santa Claus: The Movie', 'Nessa Peddersen', '152-23-1385', '2019-07-15'),
(25, 'Judex', 'Chelsy Chenery', '716-39-0389', '2001-11-30'),
(26, 'Night Moves', 'Melisent Copping', '482-32-2292', '2001-06-23'),
(27, 'Amu', 'Lisette Date', '324-17-2774', '2004-07-23'),
(28, 'White: The Melody of the Curse', 'Franz Szwarc', '196-37-9533', '2018-01-02'),
(29, 'After Hours', 'Pietrek Novis', '850-19-5666', '2009-01-29'),
(31, 'Zeitgeist: Addendum', 'Jerrome Spaughton', '662-02-6827', '2004-02-04'),
(32, '100 Feet', 'Lil Boar', '720-38-7636', '2013-11-22'),
(33, 'Ankur (The Seedling)', 'Priscella Blanchette', '575-49-2805', '2011-04-22'),
(34, 'Glass House, The', 'Meriel Larter', '425-77-2768', '2002-10-26'),
(35, 'Star Wreck: In the Pirkinning', 'Hillel Coryndon', '262-61-1337', '2011-07-12'),
(36, 'Judgment at Nuremberg', 'Tilly Mil', '891-62-8876', '2010-09-13'),
(37, 'Saw II', 'Inez Eales', '700-01-8535', '2016-03-24'),
(38, 'Prinsessa Ruusunen', 'Johnnie Shillom', '788-27-4534', '2014-01-31'),
(39, 'Visit, The', 'Kelila Faulconbridge', '869-85-2907', '2014-04-29'),
(40, 'Murder, He Says', 'Alameda Lumsdale', '662-50-6264', '2001-02-19'),
(41, 'Impact', 'Lazar Mance', '704-68-2999', '2008-09-15'),
(42, 'Twilight Saga: Breaking Dawn - Part 1, The', 'Kiley Rosenbaum', '869-83-5564', '2004-03-27'),
(43, 'Counterfeiters, The (Die Fälscher)', 'Ozzie Jonas', '864-15-5221', '2012-01-03'),
(44, 'Goodbye Solo', 'Lawry Karp', '455-29-6882', '2012-10-17'),
(45, 'Hippie Masala - Forever in India', 'Bearnard Treadaway', '736-38-3881', '2018-06-27'),
(46, 'Hunt For Gollum, The', 'Felike Standeven', '781-08-4449', '2011-05-18'),
(47, 'George & A.J.', 'Erika Turnock', '305-72-1179', '2015-02-27'),
(49, 'Brotherhood of the Wolf (Pacte des loups, Le)', 'Delmore Larive', '499-21-0017', '2007-10-04'),
(50, 'If I Were You', 'Dex Bockmaster', '791-24-0980', '2005-08-06');

```
