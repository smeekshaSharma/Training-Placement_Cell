-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin_1234', '$2y$10$clVY3MJkxLdWuP5sDFwbQuT3kxKLtlmXQsyAkREha/lT1r/RmuQWW');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `sno` int(11) NOT NULL,
  `cname` text NOT NULL,
  `syllabus` text NOT NULL,
  `media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`sno`, `cname`, `syllabus`, `media`) VALUES
(1, 'General Recruitement Process', 'These companies generally conduct 4 rounds:  \r\n\r\n1. Written Round: The Written round mainly consists of three sections which include: \r\nQuantitative Aptitude Test: \r\nThe first is the Quantitative Aptitude test where the numerical and the reasoning ability sections are tested. There are 10-25 questions that need to be attempted in the given times. There are 2-star questions which have more weight than normal questions and are a bit tricky. Important topics include Number system, Equations, Ratio and Proportion, Percentages, Profit and Loss, Time and Work, Time speed Distance, Areas and Mensuration, Averages, Permutations and Combinations, Probability, Plane geometry, Seating Arrangements, Sets, Progressions, Functions, Series, Coding, Truth and Lie based puzzles. \r\n\r\n.Verbal Ability Test: \r\nThe second section is the Verbal Ability test where the English and grammar ability is tested. There are 10-25 questions that need to be attempted in the given times. Important topics include Synonyms, Antonyms, Error Detection and Correction, Fill in the Blanks, Arranging the sentences, Comprehension Passages, etc. \r\n\r\n.Logical Reasoning Ability Test: \r\nThe third section is the Logical Reasoning Ability test where the logical thinking ability is tested. There are 10-25 questions that need to be attempted in the given times. Important topics include Series, Missing Numbers, Odd one out, Data Sufficiency, Assumptions and Conclusions, Puzzles, etc. \r\n\r\n2.Coding Round: This is a technical coding round. This might be taken along with the Written round or after the Written round, based on the company. It consists of generally 1 to 2 questions to be done in the allotted time. Command Line Arguments are needed sometimes to solve these problems (Learn Taking Input using Command Line Arguments in C/C++). \r\n\r\n3. Technical Interviews Round: The students who clear the written round are called for Technical Interview. There is no hard & fast rule for which questions will be asked in this round, you can expect questions on any topic depending on the panel. To clear this round you should be clear with your basics. \r\n\r\n4. Managerial Round: This round includes everything which was in Technical round plus it will be under pressure and a lot of cross-checking. Doubts will be                 raised on your answers to check if you can handle stress or not. Students may or may not be sent to this round depending on the feedback of the previous               round. If the feedback of the previous round was good you may expect to directly been sent to HR round. Key for this round is to be calm, confident, clear on           your thoughts and to not give up on the pressure. If you don’t know the answer you must try to attempt it with whatever you know. \r\n \r\n\r\n 5. HR Round: This is the final round of the recruitment process. The interview panel can question you anything related to your personality, family, education, hobbies, internships, general knowledge, basic HR questions like Why should I hire you?, If any problem with relocation, etc. The key here is to be confident about everything you speak.', 'recruitment.webp'),
(2, 'Tata Consultancy Services (TCS)', 'Recruitment Process :\r\nTCS conducts 4 rounds to select freshers as Assistant System Engineer in their organisation.\r\n\r\n.Written Round\r\n.Technical Round\r\n.Managerial Round\r\n.HR Round\r\n\r\nWritten Round :\r\nThe Written round consists of four sections and the total time allotted is 90 minutes. The four sections include:\r\n\r\nQuatitative Aptitude Test:\r\nThe first is the Quantitative Aptitude test where the numerical and the reasoning ability sections are tested. There are 20 questions that need to be attempted in 40 minutes. There are 2-star questions which have more weight than normal questions and are a bit tricky. There is negative marking of 1/3rd for the questions other than the star. Important topics include Number system, Equations, Ratio and Proportion, Percentages, Profit and Loss, Time and Work, Time speed Distance, Areas and Mensuration, Averages, Permutations and Combinations, Probability, Plane geometry, Seating Arrangements, Sets, Progressions, Functions, Series, Coding, Truth and Lie based puzzles.\r\nProgramming Language Test:\r\nThis round consists of general questions from computer science and programming languages. It consists of 10 to 12 questions and the time allotted is 20 minutes. It is an MCQ round and basically consists of basic programming questions.\r\nCoding Round:\r\nThis is a technical coding round. It consists of 1 to 2 questions and the time allotted is 20 minutes.\r\nYou can refer to the Practice Section to explore the questions asked in TCS.\r\n\r\nE-mail writing : There will be given certain clues/words using which you have to write an e-mail addressing the scenario. You have to type the e-mail in the space given. The most important thing is you have to use all the phrases given without missing even a single one. The time allotted is 10 minutes.\r\nYou can refer to E-mail Writing to explore the questions asked in TCS and practice further.\r\n\r\nNote: Students with more than 8.5 or 80 % respectively have to just appear for the verbal section i.e, the email writing.\r\nThe students with rank under 1000 in CodeVita round 1 will be allowed to skip the written round and appear directly for interviews.\r\n\r\nTo prepare for Written round, practice each set of previous sets of TCS available on TCS Archives\r\n\r\nTechnical Round :\r\nThe students who clear the written round are called for Technical Interview. There is no hard & fast rule for which questions will be asked in this round, you can expect questions on any topic depending on the panel. To clear this round you should be clear with your basics. You should be prepared with Data structures and Algorithms, DBMS, Operating System, Networking, OOPs concepts and a programming language of your choice. Students from branches other than CS should prepare for the other two subjects related to their branch. CS students will be expected to write codes in the interview. You may be asked puzzles in this round. To be prepared for puzzles you can practice from our Puzzles section.\r\n\r\nManagerial Round :\r\nThis round includes everything which was in Technical round plus it will be under pressure and a lot of cross-checking. Doubts will be raised on your answers to check if you can handle stress or not. Students may or may not be sent to this round depending on the feedback of the previous round. If the feedback of the previous round was good you may expect to directly been sent to HR round. Key for this round is to be calm, confident, clear on your thoughts and to not give up on pressure. If you don’t know the answer you must try to attempt it with whatever you know.\r\n\r\nHR Round :\r\nThis is the final round of the recruitment process. The interview panel can question you anything related to your personality, family, education, hobbies, internships, general knowledge, basic HR questions like Why should I hire you?, If any problem in relocation etc. The key here is to be confident about everything you speak.\r\n\r\nQuestions Asked in TCS :\r\n\r\n1. Check if the door is open or closed\r\n2. Extract the Number from the String\r\n3. Number Of Open Doors\r\n4. Linked List Insertion\r\n5. Binary Search\r\n6. How would you find the second largest salary in table?\r\n7. Prefix and Postfix\r\n8. What is a spanning Tree ?\r\n9. Explain 3NF ?\r\n10. What is friend function ?\r\n11. What does static variable mean?\r\n12. Difference between C++ and Java\r\n13. Difference between run time binding and compile time binding', 'tata.jpg'),
(3, 'IBM', 'About Company :\r\nIBM (International Business Machines Corporation) is an American multinational technology company headquartered in Armonk, New York, United States, with operations in over 170 countries. The company originated in 1911 as the Computing-Tabulating-Recording Company (CTR) and was renamed “International Business Machines” in 1924.\r\nIBM is nicknamed as Big blues. IBM is one of the world’s largest employers, with (as of 2016) nearly 380,000 employees. In 2015, IBM is ranked 43th overall in the Forbes World’s Most Innovative Companies ranking. in 2017, IBM is ranked 5th in the Forbes World’s Most Valuable Brand ranking. Know more about IBM\r\n\r\nRecruitment Process :\r\nTCS conducts 4 rounds to select freshers as Assistant System Engineer in their organisation.\r\n\r\nWritten Round\r\nTechnical Round\r\nHR Round\r\nAcademic Criteria :\r\n\r\n65 percent or above in B.Tech , Class X and XII.\r\nNo backlogs at the time of interview\r\nWritten Round :\r\nThe Written round consists of two parts namely Number Series and General Aptitude Test and English Assessment Test. For Number Series and General Aptitude Test, there is a timer of 2.15 min. And for the English Assessment Test, total time duration is 20 minutes. There is no timer for each question as in the 1st round. Both are objective tests.\r\n\r\nTechnical Round and HR Round :\r\nThe students who clear the written round are called for Technical Interview. There is no hard & fast rule for which questions will be asked in this round, you can expect questions on any topic depending on the panel. To clear this round you should be clear with your basics. You should be prepared with Data structures and Algorithms, DBMS, Operating System, Networking, OOPs concepts and a programming language of your choice. Students from branches other than CS should prepare for other two subjects related to their branch. CS students will be expected to write codes in the interview. They also ask questions from resume. You may be asked puzzles in this round. To be prepared for puzzles you can practice from our Puzzles section.\r\n\r\nSometimes they only ask HR questions like :\r\n1. Tell me about Yourself\r\n2. Why IBM\r\n3. Questions form resume\r\n\r\nQuestions Asked in IBM :\r\n1. Word break\r\n2. word break part 2\r\n3. Sort a stack\r\n4. Explain weak entity types\r\n5. How can redundancy be eliminated from a relation\r\n6. Explain the different types of database users\r\n7. What is an attribute\r\n8. Differentiate between relation schema and relation instance\r\n9. File handling in java\r\n10. Can we overload main method', 'ibm.jfif'),
(4, 'HCL Technologies', 'About Company :\r\nHCL Technologies Limited (Hindustan Computers Limited) is an Indian multinational IT services company, headquartered in Noida, Uttar Pradesh, India. It is a subsidiary of HCL Enterprise. Originally a research and development division of HCL, it emerged as an independent company in 1991 when HCL ventured into the software services business. HCL Technologies (the abbreviation of Hindustan Computers Limited) offers services including IT consulting, enterprise transformation, remote infrastructure management, engineering and R&D, and business process outsourcing (BPO). HCL also provides services such as DRYiCE, Cybersecurity and Digital & Analytics.\r\n\r\nHCL is the India’s fourth largest software compnay. HCL made it to Forbe’s Asia’s Fab 50 companies list. HCL is places at #958 on the World’s Biggest Companies List, #66 Top Multinational Performers’ list by Forbes in 2017. HCL was placed at #31 on Fortune India List in 2017. Know more about HCL\r\n\r\nRecruitment Process :\r\nHCL conducts 4 rounds to select freshers as Software Engineer in their organisation.\r\n\r\nWritten Round (English Grammar Test)\r\nVoice and Accent Test / Group discussion.\r\nTechnical Round\r\nHR Round\r\nAcademic Criteria :\r\n\r\n60 percent or above in B.Tech, Class X and XII.\r\nNo backlogs at the time of interview\r\nWritten Round :\r\nThe first round is the English grammar test which is consist of 20 multiple choice questions with idioms and phrases, comprehension, Fill the blanks, synonyms.\r\n\r\nGroup Discussion Round\r\nThe students who clear the written round are called for Group Discussion Round. In this round they will give a topic, to put your views either in favour or against that. By this round they want test our communication skills. They just want to check your confidence level so be calm and speak confidently. Sometimes this round is JAM (Just A Minute) round instead, in which you would have to have for one minute on the topic given to you.\r\n\r\nTechnical Round :\r\nThe students who clear the written round are called for Technical Round. There is no hard & fast rule for which questions will be asked in this round, you can expect questions on any topic depending on the panel. To clear this round you should be clear with your basics. You should be prepared with Data structures and Algorithms, DBMS, Operating System, Networking, OOPs concepts and a programming language of your choice. Students from branches other than CS should prepare for other two subjects related to their branch. CS students will be expected to write codes in the interview. They also ask questions from resume. You may be asked puzzles in this round. To be prepared for puzzles you can practice from our Puzzles section.\r\n\r\nHR Round\r\nYou may expect general HR questions like :\r\n1. Tell me about Yourself\r\n2. Why HCL?\r\n3. How you see yourself after five years from now ?\r\n4. What are your strengths and weaknesses ?\r\n5. Questions form resume\r\n\r\nTips :\r\n\r\nBe confident\r\nUse appropriate language\r\nBe polite and professional\r\nListen other’s views carefully\r\n\r\nQuestions Asked in HCL :\r\n1. How to create a child process in linux?\r\n2. Why is Model transformations used in the embedded system?\r\n3. Explain terminate() and unexpected() function ?\r\n4. What’s the total generic pointer type?\r\n5. Explain “far” and “near” pointers in C ?\r\n6. What is the purpose of ftell?\r\n7. What do you mean by invalid pointer arithmetic?\r\n8. How does normalization of huge pointer works?\r\n9. What is the purpose of “register” keyword?\r\n10. Reverse Bits', 'hcl.jfif'),
(5, 'Amazon', 'About Company:\r\nAmazon is an American electronic commerce and cloud computing company based in Seattle, Washington that was founded by Jeff Bezos on July 5, 1994. The tech giant is the largest Internet retailer in the world as measured by revenue and market capitalization, and second largest after Alibaba Group in terms of total sales. The amazon.com website started as an online bookstore and later diversified to sell video downloads/streaming, audiobook downloads/streaming, software, video games, electronics, food, toys, and jewelry. The company also produces consumer electronics—Kindle e-readers and Echo — and is the world’s largest provider of cloud infrastructure services (IaaS and PaaS). Amazon also sells certain low-end products under its in-house brand AmazonBasics.\r\n\r\nIn 2015, Amazon surpassed Walmart as the most valuable retailer in the United States by market capitalization. Amazon is the fourth most valuable public company in the world (behind only Apple, Alphabet, and Microsoft), the largest Internet company by revenue in the world, and after Walmart, the second largest employer in the United States.\r\n\r\nRecruitment Process:\r\nAmazon conducts 5-6 rounds to select freshers as SDE (SDE-1) in their organization. The following rounds are conducted:\r\n\r\nWritten Round\r\nOnline Coding Round\r\nMultiple Technical Rounds\r\nHiring Manager Round\r\nHR Round\r\nWritten Round:\r\nThe Written round majorly consists of two sections namely Aptitude / Logical Test and technical test. The technical test contains questions mainly from C, C++, Operating System, Data Structure, inheritance, functions. Generally in MCQ format with a given time frame of about 30 minutes.\r\n\r\nOnline Coding Round:\r\nThis round is hosted online and the candidates are presented with 3-4 coding questions, the questions are of intermediate difficulty, mainly from Arrays, strings, and matrices.\r\nTo clear this round, one should have a strong understanding of these data structures.\r\n\r\nTelephonic Round:\r\nThis round is purely algorithmic based with around 2-4 questions ranging from arrays, trees, to dynamic programming problems. You are to present algorithm and in some questions, the code also if necessary. Apt candidates are selected for further rounds.\r\n\r\nTechnical Round 1:\r\nTechnical rounds are face-to-face algorithmic rounds in which candidates are presented with 2-4 questions, all from data structures. The most commonly asked DSs are the matrix, binary tree, BST, Linked list.\r\n\r\nTechnical Round 2:\r\nSame as previous round, however the difficulty is increased and more questions from Trees, BST, and Tries are asked. One should have a clear knowledge of tree-based recursion, and the standard questions based on it are a must.\r\n\r\nHiring Manager Round:\r\nThis is generally the most technical-intensive round, with questions ranging from the projects you have done, the technology used in them, design problems and DS/Algo problems and tricky puzzle-like questions.\r\n\r\nHR Round:\r\nYou can expect HR questions like :\r\n1. Tell me about Yourself, your family\r\n2. How do you see yourself five years from now?\r\n3. What are your strengths and weaknesses?\r\n4. Some technical questions can also be asked from topics like OOPs.\r\n\r\nQuestions asked in Amazon:\r\n\r\n1. Kadane’s Algorithm\r\n2. Angle b/w hour and minute hand\r\n3. Inversion of array\r\n4. Paranthesis Checker\r\n5. 0-1 Knapsack\r\n6. k Largest elements\r\n7. Longest Palindromic\r\n8. Array to BST', 'amazon.jfif'),
(6, 'Zscaler', 'Round 1: Coding Round (JAVA DEV): 2 hrs\r\n\r\n. Study the pattern of the recruitment process before sitting in any company. See what type of questions they ask. You can only do this when you know what the company is because the question type also depends on the company type. Type implies whether it is networking-based, security-based, application-based, real estate-based, banking-based, etc.\r\n. Avoid malpractice in the MCQ or Coding Round. If you are selected by chance for the interview then they can find that you have copied from somewhere else. If you are not able to think of some algorithm techniques then always try brute force approach (a straightforward). You will be asked in the interview to optimize your code.\r\nTips to clear the coding round:\r\n\r\n1. Plan a coding test for yourself either in Leetcode or HackerRank.\r\n2. Set a timer of 1.30 hrs-  2hrs for 4 questions and try to complete it.\r\n3. If you are not able to complete within the timer set by you, then stop the timer, evaluate the code by yourself.\r\n4. Give another 1 hour to solve the undone problems.\r\n5. Still you are not able to solve that, then search on the internet and trace the algorithm.\r\nQuestions in ZSCALER Coding Round for Java Dev\r\n\r\nI solved 3 out 4 with 100% output.\r\n\r\n1. Ancestral Sorting\r\nGiven list of strings s[] = {“John VII”, David V, John V, Henry VI, Henry IV};\r\n\r\nOutput: {David V, Henry IV, Henry VI, John V, John VII}\r\n\r\nTechnique to solve it:\r\n\r\nConvert the single value list to paired value lists. Use any sorting algorithms, preferably quick sort to pass all the test cases and design a comparator function to embed it in the sorting function.\r\n\r\nIn C use:  https://www.geeksforgeeks.org/comparator-function-of-qsort-in-c/\r\n\r\nIn C++ use: https://www.geeksforgeeks.org/sort-c-stl/\r\n\r\nIn Java use: https://www.geeksforgeeks.org/comparator-interface-java/\r\n\r\n2. Spin Wheel Question\r\nIt was based on elimination of round wise maximum elements from a 2D matrix.\r\n\r\n7 1 2          1 2              1\r\n\r\n2 4 6   ->    2 4     ->     2      ->      [ 7 + 4 + 2] = 13\r\n\r\n3 1 2          1 2              1\r\n\r\nHint: Stack for storing the maximum element in one round. [7, 1, 2]\r\n\r\n3. Problem on Merge sort (Inverse Swap count):\r\nThe problem was a little tricky. Solving merge sort problems for competitive programming study divide and conquer and how to link a problem with divide and conquer.\r\n\r\nRefer: http://www.dhimangaurav.com/docs/data.pdf\r\n\r\n4. String problem\r\nGiven a string containing values from 0 to 9. The problem was to find the number of substrings in which all the different characters occur exactly k times.\r\n\r\nRefer: https://www.geeksforgeeks.org/number-substrings-count-character-k/\r\n\r\nHint: Use hashing concept. It will definitely solve all the test cases also for large values.\r\n\r\nTips to clear Interview Rounds:\r\n\r\n1. Be 1000000…….n% before sitting in the interview. Remove all kinds of weird thoughts and only focus on the interview.\r\n2. During the interview if you feel nervous, don’t let the interviewer feel it.\r\n3. Be honest, I mean be truthful. If you have the answer to the particular question then answer with full confidence.\r\n4. If you don’t know the answer to a particular question then say politely: “Sir I don’t know the answer to this question.”. You will get honesty points in this.\r\n5. If you are confused in throwing any answer to a particular question then, tell the interviewer that “I attempt it and I will try”. While trying, ask the interviewer about what difficulty you are facing. This will lead the interviewer to think that the candidate is trying to learn. This adds to honesty rewards\r\nTechnical Interview 1(Programming Fundamentals): 45 mins\r\n\r\nTell me about yourself\r\n.I am XYZ from abc college currently pursuing 3rd year, Btech, Computer Science and Engineering (Not CSE, respect the department while saying it).\r\n.My hobbies are these\r\n.My strength is this (make sure that your strength should benefit the company)\r\n.My Weakness is this (opposite)\r\n.Theme: OOPS, SQL, Programming fundamentals, Coding round questions explanation.\r\n.Technical Interview 2(Data Structures and Algorithms Skills and Database Fundamentals): 45 mins\r\n\r\n.Questions were from Comparator Sort, Deep Algorithms (All basics)\r\n.I was asked to explain my project in which I have used my skills. Make sure that you are 100000……n% confident while explaining. Your next round selection depends on it.\r\n\r\nTechnical Interview 3(Mixed Variations: Networking, Security, Testing, Deployment, Git, Algorithms): 45 mins\r\n\r\n.Awareness Questions were asked:\r\n.Are you aware of using lambda expressions are implemented in Java.\r\n.Answer: No sir, I am not aware of it . I can only say what exactly this is. The interviewer will then give you the chance to explain then, he will help you to understand what the concept is and how to implement.\r\n.Questions were from Computer Networks, Java fundamentals (ex: OOPS, Static and final variables, Memory layout of JAVA, Collections)\r\n.Example: When will you use ArrayList and LinkedLiist in JAVA.', 'zscaler.jfif'),
(7, 'Cognizant (CTS)', 'About Company :\r\nCognizant is an American multinational corporation that provides IT services, including digital, technology, consulting, and operations services. It is headquartered in Teaneck, New Jersey, United States. Cognizant is listed in the NASDAQ-100 and the S&P 500 indices. It was founded as an in-house technology unit of Dun & Bradstreet in 1994, and started serving external clients in 1996. [Source : Wikipedia]\r\n\r\nCognizant is listed for the ninth consecutive years among Fortune’s Most Admired Companies. Cognizant is also listed on Forbes FastTech 25 companies at 18th positions. With over 50 delivery centers worldwide and approximately 244,300 employees as of June 30, 2016, Cognizant is a member of the NASDAQ-100, the S&P 500, the Forbes Global 2000 and the Fortune 500 and is ranked among the top performing and fastest growing companies in the world.\r\n\r\nRecruitment Process :\r\nCognizant conducts 3 rounds to select freshers as Assistant System Engineer in their organisation.\r\n\r\n. Written Round\r\n. Technical Round\r\n. HR Round\r\n. Academic Criteria :\r\n\r\n70 percent or above in B.Tech, Class X and XII.\r\nNo backlogs at the time of interview\r\nWritten Round :\r\nThe Written round consists of two major sections namely General Aptitude Test and Verbal Ability Test. General Aptitude Test, has mathematical reasoning part and logical reasoning part and verbal ability Test.\r\n\r\nTechnical Round and HR Round :\r\nThe students who clear the written round are called for Technical Interview. There is no hard & fast rule for which questions will be asked in this round, you can expect questions on any topic depending on the panel. To clear this round you should be clear with your basics. You should be prepared with Data structures and Algorithms, DBMS, Operating System, Networking, OOPs concepts and a programming language of your choice. Students from branches other than CS should prepare for other two subjects related to their branch. CS students will be expected to write codes in the interview. They also ask questions from resume. You may be asked puzzles in this round. To be prepared for puzzles you can practice from our Puzzles section.\r\n\r\nSometimes they only ask HR questions like :\r\n1. Tell me about Yourself\r\n2. Why Cognizant ?\r\n3. How you see yourself after five years from now ?\r\n4. What are your strengths and weaknesses ?\r\n5. Questions form resume\r\n\r\nQuestions Asked in Cognizant :\r\n1. crack the series\r\n2. reverse a linked list\r\n3. Binary Search\r\n4. explain jaxm messaging models\r\n5. can you modify the constant variable in c\r\n6. explain jax rpc\r\n7. what is dlm\r\n8. how can a vfs layer allow multiple file systems support\r\n9. what is graceful degradation\r\n10. what are loosely coupled systems', 'cognizant.jfif'),
(8, 'Infosys', 'Infosys Recruitment Process\r\n\r\n.About Company\r\n.Recruitment Process\r\n.Questions Asked in Infosys\r\n\r\nAbout Company :\r\nInfosys Limited (formerly Infosys Technologies Limited) is an Indian multinational corporation that provides business consulting, information technology and outsourcing services. It has its headquarters in Bengaluru, India. Infosys is the second-largest Indian IT services company by 2016 revenues. On January 12, 2017, its market capitalisation was $34.38 Billion.\r\nIn 1981, seven engineers started Infosys Limited with just US$250. From the beginning, the company was founded on the principle of building and implementing great ideas that drive progress for clients and enhance lives through enterprise solutions. Know more about Infosys.\r\n\r\nRecruitment Process :\r\nInfosys conducts 3 rounds to recruit new employees.\r\n\r\n. Online Test\r\n. Technical Round\r\n. HR Round\r\n\r\nOnline Test :\r\nThe online test for Infosys include questions from Quantitative ability, Reasoning and Verbal Ability. The duration of the test is 95 minutes. Each section of the test i.e. Quantitative Ability, Reasoning and Verbal Ability has specific time allocated to them and all questions of that section needs to be completed in that specific period. The candidate can attempt questions in any order in a particular section but cannot move among the sections which means that candidate has to finish one section first and then he / she can move to other sections.\r\nYou can find and practice previous years Infosys questions at campusgate\r\n\r\nTechnical Round :\r\nThe candidate who clear online test are advanced to Technical round. This round checks your concepts and how sound you are technically. Questions will be be from different subjects. One should be prepared with Data structures and Algorithms, DBMS, Operating System, Networking, OOPs concepts and a programming language of your choice. Students from branches other than CS should prepare basic concepts of their branch. Some tricky questions might be asked.\r\n\r\nHR Round :\r\nThis is the final round of the hiring process. Questions regarding your resume, job and company might be asked with basic HR questions like ‘What are your Career Goals ?’, ‘Why Infosys ?’ etc. They will check your communication skills, confidence and attitude. Be clear and confident with your thoughts and you will ace this round easily.\r\n\r\nQuestions Asked in Infosys :\r\n\r\n1. Combination Sum\r\n2. Reverse an Array\r\n3 .Binary Search\r\n4. Stack Overflow\r\n5. Heap advantage and disadvantage\r\n6. Real life examples of Polymorphism\r\n7. What is a proxy Server ?\r\n8. What is an outer join ?\r\n9. What is difference between pass by value and pass by reference ?\r\n10. Software Development Life Cycle\r\n11. Explain run time polymorphism.\r\n12. Keys in relation\r\n13. Abstract class and Interface in Java', 'infosys.jfif'),
(9, 'Wipro', '. About Company\r\n. Recruitment Process\r\n. Questions Asked in Wipro\r\n\r\nAbout Company :\r\nWipro Limited (Western India Palm Refined Oils Limited or more recently, Western India Products Limited) is an Indian Information Technology Services corporation headquartered in Bengaluru, India. Wipro Limited is a leading global information technology, consulting and business process services company.\r\nIn 2013, Wipro demerged its non-IT businesses into separate companies to bring in more focus on independent businesses.\r\n\r\nRecruitment Process :\r\nWipro conducts 3 rounds to recruit new employees.\r\n. Online Test\r\n. Technical Round\r\n. HR Round\r\nOnline Test :\r\nThe Online test consist of questions from various domains and an essay writing. This is a time based test and each section is allocated specific time. Different sections of the test are :\r\n\r\n. Quantitative Aptitude\r\n. Logical Reasoning\r\n. Verbal Ability\r\n. Basic Programming and Computer Fundamentals\r\nEssay writing is given specific time and you have to write an essay on paper on topic provided to you. Topics may vary from current affairs to politics to abstract.\r\n\r\nNote : Wipro mostly conducts Group Discussion (GD) before online test. Sometimes, they may conduct Group Discussion (GD) after online test also.\r\n\r\nYou can practice previous years questions of Wipro from campusgate\r\n\r\nTechnical Round :\r\nTo ace this round you should be good with your concepts. If you are good with the basic concepts, it will easy for you to clear the round. There is no fixed rule or domain from which questions will be asked so you need to be versed with basics well. To maximize your chances you should be prepared with Data structures and Algorithms, DBMS, Operating System, Networking, OOPs concepts and a programming language of your choice. Students from branches other than CS should prepare basic concepts of their branch.\r\n\r\nHR Round :\r\nThis is the final round of recruitment process. Hr will check your communication skills, confidence and body language. There will be basic HR questions like Tell me about yourself ?, Why do you want to join Wipro ? etc. You might be asked some puzzles and technicals questions depending on your feedback and HR. You can prepare for puzzles from our Puzzles Section. The key for this round is being confident about yourself.\r\n\r\nQuestion asked in Wipro :\r\n\r\n1. Perfect Numbers\r\n2. Linked List Insertion\r\n3. Binary Search\r\n4. Bubble Sort\r\n5. Divisible by 3\r\n6. Convert string to long integer\r\n7. Spaghetti programming\r\n8. Pointer Problem\r\n9. What are volatile variables?\r\n10. What do you mean by a sequential access file?\r\n11. How would you secure data for transport in cloud?\r\n12. Why string objects are immutable in java?\r\n13. What are the advantages and disadvantages of B-star trees over Binary trees.?\r\n14. Explain RDBMS KERNEL?\r\n15. What is the difference between error and an exception?', 'wipro.jfif'),
(10, 'Microsoft', '. About the Company\r\n. Recruitment Process\r\n. Questions asked in Microsoft\r\n\r\nAbout the Company:\r\nMicrosoft Corporation is an American multinational technology company with headquarters in Redmond, Washington. It develops, manufactures, licenses supports and sells computer software, consumer electronics, personal computers, and services. Its best-known software products are the Microsoft Windows line of operating systems, the Microsoft Office suite, and the Internet Explorer and Edge web browsers.\r\nMicrosoft was founded by Paul Allen and Bill Gates on April 4, 1975, and rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. Since 1990, the company made a number of corporate acquisitions, their largest being the acquisition of LinkedIn for $26.2 billion in December 2016, followed by their acquisition of Skype Technologies for $8.5 billion in May 2011.\r\nSatya Nadella took over as CEO in 2014 and henceforth the company has scaled back on hardware after losing market in the domain of mobiles and has instead focused on cloud computing, a move that helped the company’s shares reach its highest value since December 1999. As of 2016, it is the world’s largest software maker by revenue, and one of the world’s most valuable companies.\r\n\r\nRecruitment Process:\r\nMicrosoft conducts 4 to 5 rounds to select the freshers as SDE in their organisation:\r\n\r\n. Online Round\r\n. Onsite Round\r\n. Technical Round 1\r\n. Technical Round 2\r\n. Technical Round 3 (System Design Round)\r\n. Technical-cum-HR round\r\n\r\nOnline Round:\r\nThe CoCube or the online coding round consists of 5 to six competitive coding questions with a time limit running between 1 hour to 1 hour 30 minutes. The questions level varies consisting of questions from domains of Arrays, String, Single Linked List, Double Linked List etc.\r\n\r\nOnsite Round:\r\nThe group fly round or the onsite round consists of a written coding contest. Questions are provided and time span of 10 to 15 minutes are given to solve it and another 20 minutes are provided to explain the approach to the mentor, under whose supervision one is assigned to do the task. One should be well versed with the domains of competitive coding, data structure and algorithms to clear the round. Few problems asked are:\r\n\r\n. Implementation of Deep Copy\r\n. k most frequent words from a file\r\n. k (or most frequent) numbers in a stream\r\n\r\nTechnical Rounds:\r\nThese consist of face to face rounds with the interviewer and to pass through these round one should have good knowledge regarding the facts mentioned in the CV. The questions are generally asked from the projects, internships or training mentioned in the CV. Following this one should be well known with the course related subjects like Data Structure, Algorithms, Operating System, Networking, Database Management etc. So, basically, the interview tests whether everything mentioned in the CV is full proof and the interviewee is having in-depth knowledge regarding the subjects dealt during the course of engineering. Students can also be expected to write codes in the interview. The final technical round consists of System Designing where questions from various domains can be asked like Cloud COmputing, Microsoft Azure, Dropbox and various Microsoft technology driven engines.\r\n\r\nTechnical-cum HR Round:\r\nThis round deals less with the technical questions but more with the HR questions like:\r\n\r\n. Where do you see yourself in next 5 years, 15 years and 25 years?\r\n. Questions on family background.\r\n. Strengths and Weaknesses.\r\n. Questions on the facts mentioned in the CV.\r\n\r\nQuestions asked in Microsoft:\r\n\r\n1. Trapping Rainwater Problem\r\n2. Count all possible paths from top left to bottom right of a mXn matrix\r\n3. Print a pattern without using any loop\r\n4. How to design a tiny URL or URL shortener?\r\n5. Write Code to Determine if Two Trees are Identical\r\n6. Given only a pointer/reference to a node to be deleted in a singly linked list, how do you delete it?\r\n7. Thrashing in OS\r\n8. Kadane’s Algorithm\r\n9. Sum of Leaf Nodes at Min Level\r\n10. Minimum number of coins dynamic programming vs iterative', 'microsoft.webp'),
(11, 'Flipkart', 'Flipkart conducts around 4 rounds to select freshers as SDE in their organization. The following rounds are conducted:\r\n\r\n1. Online Coding or Telephonic round\r\n2. Multiple Technical Rounds\r\n3. Hiring Manager Round\r\n4. HR Round\r\n\r\nOnline Coding Round/ Telephonic round:\r\nThe online round is hosted on Hackerrank and the candidates are presented with around 3 coding questions, of which 2 are easy and 1 is hard. The number of questions may vary the difficulty distribution is same. The whole round is around 60 minutes long. Problems are generally based on recursion, strings, trees and graphs.\r\n\r\nTechnical Round 1:\r\nPersonal interview round which largely consists of algorithmic problems on DS like graphs, dp, matrices and strings. Many times puzzles are also asked, though standard puzzles, some variation maybe there. A strong understanding of data structures is needed to pass this round.\r\n\r\nTechnical Round 2:\r\nThis round generally is a machine coding round, in which a particular problem is given whose solution is to be built from scratch in any language of choice, ex: job scheduling problem, implementing a complete text line editor with specified features. The round is of ~90 mins and a complete working code with error handling is expected at the end.\r\n\r\nHiring Manager round:\r\nThis round mainly consists of hard algorithmic and DS related problems, mostly from trees, graphs and linked lists, along with the discussion of your projects, the technologies used in them, the problems faced etc. Some conceptual problems related to OS are also asked.\r\n\r\nHR Round:\r\nYou can expect HR questions like :\r\n1. Tell about yourself.\r\n2. Your shortcomings and strengths.\r\n3. Discussion regarding your post in the company\r\n\r\nQuestions asked in Flipkart:\r\n\r\n1. Cutting binary string\r\n2. K-th element of two sorted arrays\r\n3. First non repeating character in a stream\r\n4. 0-1 knapsack problem\r\n5. Inversion of array\r\n6. Sum of dependencies in a graph\r\n7. Shortest direction\r\n8. Rat in a maze', 'flipkart.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2022_04_06_054005_create_sessions_table', 2),
(7, '2014_10_12_00001_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mock_test`
--

CREATE TABLE `mock_test` (
  `sno` int(11) NOT NULL,
  `cname` text NOT NULL,
  `media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mock_test`
--

INSERT INTO `mock_test` (`sno`, `cname`, `media`) VALUES
(1, 'HCL Technologies', 'HCL-Mock-Placement-Paper.pdf'),
(2, 'Cognizant (CTS)', 'Cognizant-Placement-Paper.pdf'),
(3, 'Infosys', 'Infosys-Model-Placement.pdf'),
(4, 'Wipro', 'Wipro-Placement-Paper.pdf'),
(5, 'TCS', 'TCS-Model-Paper.pdf'),
(6, 'Accenture', 'Accenture-Model-Paper.pdf'),
(7, 'IBM', 'IBM-MockTest-Placement.pdf'),
(8, 'Tech Mahindra', 'Tech-Mahindra-Model.pdf'),
(9, 'Cisco', 'cisco-pp.pdf'),
(10, 'Deloitte', 'deolitee-pp.pdf'),
(11, 'Capgemini', 'capgemini-mock-test.pdf'),
(12, 'Dell', 'Dell-Model-Paper.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `sno` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `media` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sno`, `title`, `description`, `media`, `image`) VALUES
(1, 'Tata Technologies', 'Tata Technologies is hiring the batch 2021, 2022.', 'Tata Technologies Campus Hiring – 2022.pdf', 'tata.jpg'),
(2, 'IBM CodeKnock', 'IBM Consulting Off-Campus-- Calling all technologists.', 'IBM CodeKnack-IBM Consulting Off Campus- Calling all technologists.pdf', 'ibm.jfif'),
(3, 'Placement Training', 'Regarding Pre-placement preparation training for students.', 'Regarding Pre- placement preparation training for students of IKG PTU campuses.pdf', 'placement.jfif'),
(4, 'Cloud Analogy', 'Joint Campus online placement drive and there are 6 companies.', 'CloudAnalogy Letter .pdf', 'cloud.jpg'),
(5, 'Just Dial', 'Just dial online placement drive for 2022 batch.', 'Just dial - Placement Drive.pdf', 'justdial.jfif'),
(6, 'Byjus Placements', 'Byjus placement drive for graduate trainee.', 'Byjus online placement drive.pdf', 'byjus.jfif'),
(7, 'Byjus Campus Hiring', 'IKGPTU invites students of its campus for Byju\'s Campus hiring for(BDA)', 'BYJU\'S Campus Hiring.pdf', 'byjus.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `postal` text NOT NULL,
  `personal` text NOT NULL,
  `sex` text NOT NULL,
  `city` text NOT NULL,
  `course` text NOT NULL,
  `district` text NOT NULL,
  `email` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `fname`, `postal`, `personal`, `sex`, `city`, `course`, `district`, `email`, `mobile`, `password`) VALUES
(1, 'Smeeksha Sharma', 'Sanjeev Sharma', 'Punjab', '#2300, Gali Awe wali, Bz. Bhagtan wala, Amritsar.', 'Female', 'Amritsar.', 'B.tech(CSE)', 'Amritsar.', 'er.sharma2k14@gmail.com', 8264136526, '$2y$10$kYkme5RhHyUGxIa99phm.OGcAH29xm1giK.bS.8qXbk3PyV1CdR6.'),
(2, 'Divyanka Thakur', 'Aman Thakur', '#27/9,Mall Road, Jalandhar.', '#27/9,Mall Road, Jalandhar.', 'Female', 'Jalandhar.', 'MCA', 'Jalandhar.', 'divyanka.thakur89@gmail.com', 9780120301, '$2y$10$OinqSZjggKSr7l/wLtdsrudRYHo3CxfCR9Fovl8tF6j9n/eLFazPO'),
(3, 'Kartikey Batra', 'Rajiv Batra', 'Aman Avenue, Hakima Gate, Amritsar.', 'Aman Avenue, Hakima Gate, Amritsar.', 'Male', 'Amritsar.', 'B.tech(ME)', 'Amritsar.', 'kartikeybatra99@gmail.com', 9780902905, '$2y$10$FyZQhGUxPW3t/J7qBW/FWet7F7JkQOMj.uNYD1Ssv7kjyLzB1hI1y'),
(4, 'Aryan Mahajan', 'Ashish Mahajan', 'Ram Bagh, Ludhiana.', 'Ram Bagh, Ludhiana.', 'Male', 'Ludhiana.', 'BCA', 'Ludhiana.', 'mahajan.aryan77@gmail.com', 9569825414, '$2y$10$SKS784nK7JlSKViRrd.IHuqUE4sd4kwBtd.3Qdl7rOrNTI8kLThNe'),
(5, 'Damanpreet Singh', 'Satpal Singh', 'Hoshiarpur', 'Hoshiarpur', 'Male', 'Hoshiarpur', 'B.tech(ME)', 'Hoshiarpur', 'damanpreet9999@gmail.com', 7814878389, '$2y$10$v4DmZYyqCwV/qYcyu7/pBedgA8yRKUybMA3FYepwxyVv57XSLusgS'),
(6, 'Heenaya Sharma', 'Amit Sharma', 'Ranjit Avenue, Amritsar.', 'Ranjit Avenue, Amritsar.', 'Female', 'Amritsar', 'BCA', 'Amritsar.', 'heenaya.sharma56@gmail.com', 9780803604, '$2y$10$JGOpgp02gMOsOsS4tN16pe4zY3FKeoIOxcPmLf/694DG0/r7RICt6'),
(7, 'Nisha Kumari', 'Manoj kumar', 'Model Town, Bathinda', 'Model Town, Bathinda.', 'Female', 'Bathinda', 'MCA', 'Bathinda.', 'kumari.nishu141@gmail.com', 9417014078, '$2y$10$0pGrU9ub0hVheV8qBbt1/ejh1ul5PSSJXi8zg/l7Kl4vMUZpobMQC'),
(8, 'Simarjeet Kaur', 'Gurcharan Singh', 'New Azaad Nagar, Jalandhar.', 'New Azaad Nagar, Jalandhar.', 'Female', 'Jalandhar', 'B.tech(CSE)', 'Jalandhar.', 'simarjeetkaur716@gmail.com', 9780195421, '$2y$10$4nwp5IjDIYROqIaL8hfNRuW/X89uYUs9kvwJLB94MLNpby3q0jJeW'),
(9, 'Banita Rani', 'Mukesh Kumar', 'Sultanwind road, Hoshiarpur.', 'Sultanwind road, Hoshiarpur.', 'Female', 'Hoshiarpur.', 'M.tech(CSE)', 'Hoshiarpur', 'banita_rani234@gmail.com', 8968264675, '$2y$10$bHc9ChotGYLmAhvbnXG5AuZbF/MJOb3/vLXCjU4oFMoa4uTt/WeLK');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cSxdJ5UR5EuFQldcbNfhnxpKqsKlp21u82VAg7BR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36 Edg/100.0.1185.29', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2dZckM1dFZtT0Nxekp0TDJKTlJ3N0t5S0VteHA4Yk9EUVZxdVhoZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649228009),
('IU4P1ox6ClWkcCuyUnnIo80o5VbueEmmJY0ukl99', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36 Edg/100.0.1185.29', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3FzWlIxSGtTU1VrWlhOQjBFb1FqaEZuMFFySTdpYlUzMmVWS2k0RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaWduaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649306947),
('ObBgCMqWUOyZddr9ab17d2OnJsC7fA8qdzReCWQ9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36 Edg/100.0.1185.29', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1lzdEY1TTFFckNRb1phbU1qbGgzbURUSmJXaWh1YXFTdDZiT0RwayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649324925);

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`email`, `password`) VALUES
('er.sharma2k14@gmail.com', '12345'),
('sharma.ashi98@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `steam`
--

CREATE TABLE `steam` (
  `id` int(11) NOT NULL,
  `sname` text NOT NULL,
  `designation` text NOT NULL,
  `branch` text NOT NULL,
  `course` text NOT NULL,
  `year` int(11) NOT NULL,
  `email` text NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steam`
--

INSERT INTO `steam` (`id`, `sname`, `designation`, `branch`, `course`, `year`, `email`, `mobile`) VALUES
(1, 'Smeeksha Sharma', 'Training and Placement Coordinator', 'Computer Science Engineering', 'B.tech(CSE)', 4, 'er.sharma2k14@gmail.com', 8264136526),
(2, 'Kiran Kumar', 'Training and Placement Representative', 'Computer Science Engineering', 'B.tech(CSE)', 2, 'kirankumar12@gmail.com', 8590658979),
(3, 'Anuraag Kumar Mishra', 'Training and Placement Representative', 'Computer Science Engineering', 'B.tech(CSE)', 3, 'anuraag.mishra77@gmail.com', 7717667030),
(4, 'Bharat Kumar', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 3, 'kumar.bharat67@gmail.com', 9463033542),
(5, 'Rachna Lahoria', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 4, 'rachnalahoria99@gmail.com', 9877804668),
(6, 'Abhishek Kumar', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 3, 'kumar.abhishek14@gmail.com', 8077287887),
(7, 'Vasu', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 1, 'vasu4566@gmail.com', 7869452077),
(8, 'Mahendra Yadav', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 3, 'mahendra_yadav121@gmail.com', 8437448151),
(9, 'Harry Gill', 'Core Team, Training and Placement Cell', 'Mechanical Engineering', 'B.tech(ME)', 2, 'harry_gill74@gmail.com', 6397182117),
(10, 'Shivam Srivastava', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 3, 'shivamsrivastava823@gmail.com', 8874667646),
(11, 'Jagdeep Singh', 'Core Team, Training and Placement Cell', 'Computer Science Engineering', 'B.tech(CSE)', 4, 'jagdeepsingh890@gmail.com', 6284226868);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `postal`, `personal`, `sex`, `city`, `course`, `district`, `email`, `mobile`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Smeeksha Sharma', 'Sanjeev Kumar', 'Hall Bazar, Amritsar.', 'Hall Bazar, Amritsar.', 'Female', 'Amritsar', 'B.tech(CSE)', 'Amritsar', 'er.sharma2k14@gmail.com', 8264136526, 0, '$2y$10$V041vmNXtRqiGZW4M8zlaeIhdH5L0fkCCT8WXAPkKxN6HUVhcNJnC', '2022-06-09 00:22:02', '2022-06-09 00:22:02'),
(2, 'Damanpreet Singh', 'Satpal Singh', '#27/9, Mall Road , Hoshiarpur.', '#27/9, Mall Road , Hoshiarpur.', 'Male', 'Hoshiarpur.', 'BCA', 'Hoshiarpur', 'damanpreet9999@gmail.com', 7814878389, 0, '$2y$10$Mcxf6IKUldBOA9IZTxUkO.xG.O7jXTRV3YcNMQAol8xPf62k4//D.', '2022-06-09 00:27:25', '2022-06-09 00:27:25'),
(3, 'Divyanka Thakur', 'Aman Thakur', 'Gulmerg Avenue, Bathinda.', 'Gulmerg Avenue, Bathinda.', 'Female', 'Bathinda.', 'Choose Course', 'Bathinda.', 'divyanka.thakur89@gmail.com', 9780183409, 0, '$2y$10$w3psWobC1mChtSbS0SHAmO6RSKepNAvdmJAjZUN1W/a81Qgmv76yO', '2022-06-09 00:30:00', '2022-06-09 00:30:00'),
(4, 'Aryan Mahajan', 'Ashish Mahajan', 'Ram Bagh, Ludhiana.', 'Ram Bagh, Ludhiana.', 'Male', 'Ludhiana.', 'BCA', 'Ludhiana', 'mahajan.aryan77@gmail.com', 9569825414, 0, '$2y$10$QyLK6uvFmGjbVrQnZjNNlOn44TZf33eSdv.N0HUi9.I9IykJL/Fje', '2022-06-09 00:31:56', '2022-06-09 00:31:56'),
(5, 'Kartikey Batra', 'Rajiv Batra', 'Aman Avenue, Hakima Gate, Amritsar.', 'Aman Avenue, Hakima Gate, Amritsar.', 'Male', 'Amritsar.', 'B.tech(ME)', 'Amritsar.', 'kartikeybatra99@gmail.com', 9780902905, 0, '$2y$10$IvOVl8E2EujjwLB3A.dQne6iJJRpWeXVNujRj/6.y8UNKmxH4xUXa', '2022-06-09 00:34:02', '2022-06-09 00:34:02'),
(6, 'Nisha Kumari', 'Manoj Kumar', 'Chheharta Road, Batala.', 'Chheharta Road, Batala.', 'Female', 'Batala.', 'B.tech(CSE)', 'Batala.', 'kumari.nishu141@gmail.com', 9417014078, 0, '$2y$10$g5D0Xa/dpuX04k1495HmMO5xfXEk2anSKFIagaDpp87igCaYY54U2', '2022-06-09 00:35:52', '2022-06-09 00:35:52'),
(7, 'Heenaya Sharma', 'Amit Sharma', 'Ranjit Avenue, Jalandar.', 'Ranjit Avenue, Jalandar.', 'Female', 'Jalandhar.', 'M.tech(CSE)', 'Jalnadhar.', 'heenaya.sharma56@gmail.com', 9780803604, 0, '$2y$10$Zbw7MPEEIvSUsQpTqlQIO./0ESsc3t4ejnbpDMIR5d7GQ/hwpkwNW', '2022-06-09 00:39:26', '2022-06-09 00:39:26'),
(8, 'Simarjeet Kaur', 'Gurcharan Singh', 'New Azaad Nagar, Mansa.', 'New Azaad Nagar, Mansa.', 'Female', 'Mansa', 'M.tech(CSE)', 'Mansa.', 'simarjeetkaur716@gmail.com', 9780195421, 0, '$2y$10$jauHS8e4YClcy1J92NhQLepuv9AhvcBaNvh7hCfGqPBXnUQ64VZfu', '2022-06-09 00:41:08', '2022-06-09 00:41:08'),
(9, 'Banita Rani', 'Mukesh Kumar.', 'Sultanwind road, Hoshiarpur.', 'Sultanwind road, Hoshiarpur.', 'Female', 'Hoshiarpur.', 'MCA', 'Hoshiarpur.', 'banita_rani234@gmail.com', 8968264675, 0, '$2y$10$8jW/AF4hMcrnHDn/D.ulzujN9WOm7N4vjC8OP8QkxgcwiRaMpMf7e', '2022-06-09 00:43:14', '2022-06-09 00:43:14'),
(10, 'Jagdeep Singh', 'Gurnaam Singh', 'Green Avenue, Batala.', 'Green Avenue, Batala.', 'Male', 'Batala.', 'B.tech(CSE)', 'Batala.', 'jagdeepsingh890@gmail.com', 6284226868, 0, '$2y$10$.of0uT2oNnflkr66RU2e5.DlIBxcasT.calsKnibR/ZuJ2cSbk6z6', '2022-06-09 00:46:04', '2022-06-09 00:46:04'),
(11, 'admin', 'admin', 'admin', 'admin', 'Female', 'admin', 'BCA', 'admin', 'admin@gmail.com', 8284971913, 1, '$2y$10$hhNKP1KVO1JHNqGQ.umrWO9b4LgCl0mqHVcmU1VhrEgCGtnHunlda', '2022-06-09 00:48:34', '2022-06-09 00:48:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mock_test`
--
ALTER TABLE `mock_test`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `steam`
--
ALTER TABLE `steam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mock_test`
--
ALTER TABLE `mock_test`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `steam`
--
ALTER TABLE `steam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
