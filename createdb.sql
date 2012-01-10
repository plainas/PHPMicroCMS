-- Server version: 5.1.39
-- PHP Version: 5.2.15

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `parent` int(11) NOT NULL,
  `protected` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `parent`, `protected`) VALUES
(1, 'Day Tripper EDITED', 'day tripper yeah', 0, 0),
(7, 'Yellow Submarine', 'In the town where I was born\r\nLived a man who sailed the sea\r\nAnd he told us of is life\r\nIn his yellow submarine\r\n\r\nWe all live in a yellow submarine\r\nyellow submarine, yellow submarine\r\n... ', 0, 0),
(2, 'Eight days a week EDITED', 'Ooh I need your love babe,\r\nGuess you know it''s true.\r\nHope you need my love babe,\r\nJust like I need you,Ooo.\r\n\r\nHold me, love me, hold me, love me.\r\nI ain''t got nothin'' but love babe,\r\nEight days a week.\r\n\r\nLove you ev''ry day girl,\r\nAlways on my mind.\r\nOne thing I can say girl,\r\nLove you all the time,ooh\r\n\r\n\r\nHold me, love me, hold me, love me.\r\nI ain''t got nothin'' but love girl,\r\nEight days a week.\r\n\r\nEight days a week\r\nI love you.\r\nEight days a week\r\nIs not enough to show I care.\r\n\r\nOoh I need your love babe,\r\nGuess you know it''s true.\r\nHope you need my love babe,\r\nJust like I need you.\r\n\r\nHold me, love me, hold me, love me.\r\nI ain''t got nothin'' but love babe,\r\nEight days a week.\r\n\r\nEight days a week\r\nI love you.\r\nEight days a week\r\nIs not enough to show I care.\r\n\r\nLove you ev''ry day girl,\r\nAlways on my mind.\r\nOne thing I can say girl,\r\nLove you all the time.\r\n\r\nHold me, love me, hold me, love me.\r\nI ain''t got nothin'' but love babe,\r\nEight days a week,\r\nEight days a week,\r\nEight days a week. \r\n', 0, 0),
(3, 'The white album', 'The Beatles is the ninth official album by the English rock group The Beatles, a double album released in 1968. It is commonly known as the "White Album" as it has no graphics or text other than the band''s name (and, on the early LP and CD releases, a serial number) on its plain white sleeve. The album was the first that The Beatles undertook following the death of their manager, Brian Epstein, and the first released by their own record label, Apple. The album''s original title, A Doll''s House, was changed when the British progressive rock band Family released the similarly titled Music in a Doll''s House earlier that year. It has sold over 30 million copies world-wide.\r\nThe Beatles was written and recorded during a period of turmoil for the group, after visiting the Maharishi Mahesh Yogi in India and having a particularly productive songwriting session in early 1968. The group returned to the studio for recording from May to October 1968, only to have conflict and dissent drive the group members apart. Drummer Ringo Starr quit the band for a brief time, leaving Paul McCartney to perform drums on some of the album''s songs.', 0, 0),
(4, 'Sgt. Pepper''s Lonely Hearts Club Band', 'It was twenty years ago today,\r\nSgt. Pepper taught the band to play\r\nThey''ve been going in and out of style\r\nBut they''re guaranteed to raise a smile\r\nSo may I introduce to you\r\nThe act you''ve known for all these years\r\nSgt. Pepper''s Lonely Hearts Club Band\r\nWe''re Sgt. Pepper''s Lonely Hearts Club Band\r\nWe hope you will enjoy the show\r\nSgt. Pepper''s Lonely Hearts Club Band\r\nSit back and let the evening go\r\nSgt. Pepper''s lonely, Sgt. Pepper''s lonely\r\nSgt. Pepper''s Lonely Hearts Club Band\r\nIt''s wonderful to be here\r\nIt''s certainly a thrill\r\nYou''re such a lovely audience\r\nWe''d like to take you home with us\r\nWe''d love to take you home\r\nI don''t really want to stop the show\r\nBut I thought that you might like to know\r\nThat the singer''s going to sing a song\r\nAnd he wants you all to sing along\r\nSo let me introduce to you\r\nThe one and only Billy Shears\r\nAnd Sgt. Pepper''s Lonely Hearts Club Band \r\n\r\nCROUD', 0, 1),
(5, 'With a Little Help from My Friends', 'What would you think if I sang out of tune,\r\nWould you stand up and walk out on me.\r\nLend me your ears and I''ll sing you a song,\r\nAnd I''ll try not to sing out of key.\r\nOh I get by with a little help from my friends,\r\nMmm,I get high with a little help from my friends,\r\nMmm, I''m gonna try with a little help from my friends. \r\n\r\nDo you need anybody?\r\nI need somebody to love.\r\nCould it be anybody?\r\nI want somebody to love.\r\n\r\nWhat do I do when my love is away.\r\n(Does it worry you to be alone)\r\nHow do I feel by the end of the day\r\n(Are you sad because you''re on your own)\r\nNo, I get by with a little help from my friends,\r\nMmm, get high with a little help from my friends,\r\nMmm, gonna to try with a little help from my friends\r\n\r\nDo you need anybody?\r\nI need somebody to love.\r\nCould it be anybody?\r\nI want somebody to love.\r\n\r\nWould you believe in a love at first sight?\r\nYes I''m certain that it happens all the time.\r\nWhat do you see when you turn out the light?\r\nI can''t tell you, but I know it''s mine.\r\nOh, I get by with a little help from my friends,\r\nMmm I get high with a little help from my friends,\r\nOh, I''m gonna try with a little help from my friends\r\n\r\nDo you need anybody?\r\nI just need someone to love.\r\nCould it be anybody?\r\nI want somebody to love\r\n\r\nOh, I get by with a little help from my friends,\r\nMmm, gonna try with a little help from my friends\r\nOoh, I get high with a little help from my friends\r\nYes I get by with a little help from my friends,\r\nwith a little help from my friends', 4, 1),
(6, 'Lucy in the sky with diamonds', 'Picture yourself in a boat on a river\r\nWith tangerine trees and marmalade skies\r\nSomebody calls you, you answer quite slowly\r\nA girl with kaleidoscope eyes\r\n\r\nCellophane flowers of yellow and green\r\nTowering over your head\r\nLook for the girl with the sun in her eyes\r\nAnd she''s gone\r\n\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds, ah\r\n\r\nFollow her down to a bridge by a fountain\r\nWhere rocking horse people eat marshmallow pies\r\nEveryone smiles as you drift past the flowers\r\nThat grow so incredibly high\r\n\r\nNewspaper taxies appear on the shore\r\nWaiting to take you away\r\n[ From: http://www.elyrics.net/read/b/beatles-lyrics/lucy-in-the-sky-with-diamonds-lyrics.html ]\r\nClimb in the back with your head in the clouds\r\nAnd you''re gone\r\n\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds, ah\r\n\r\nPicture yourself in a train in a station\r\nWith plasticine porters with looking glass ties\r\nSuddenly someone is there at the turnstile\r\nThe girl with kaleidoscope eyes\r\n\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds, ah\r\n\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds, ah\r\n\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds\r\nLucy in the sky with diamonds', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `pass_salt` varchar(4) NOT NULL,
  `pass_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `role`, `pass_salt`, `pass_hash`) VALUES
(1, 'admin', 'Administrator', 1, 'ff', '796303ebfbfb1b440a38e1f8424642dc75becd79'),
(2, 'john', 'John Lennon  ', 2, 'ui', '5b0c79680b8cace9f063bb6ab768bb48b64ba018');

