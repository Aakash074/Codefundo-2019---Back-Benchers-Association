# Codefundo-2019---Back-Benchers-Association
e-Voting system using Blockchain Technology

E-voting systems will be beneficial to all people who are involved in elections. For example, administrators can improve operation of tasks for elections, and voters can vote in an election anytime and anywhere. In addition, ideal e-voting systems have transparency, completeness (only voters have the right to vote and their votes are correctly counted), and verifiability (voters can check that their vote is correctly counted), and therefore it is better than existing voting system.

![Election Roles and Process](https......)

Digital voting is the use of electronic devices, such as voting machines or an internet browser, to cast votes. These are sometimes referred to as e-voting when voting using a machine in a polling station, and e-voting when using a web browser.

![Election as a smart contract](https..... )

Security of digital voting is always the biggest concern when considering to implement a digital voting system. With such monumental decisions at stake, there can be no doubt about the system’s ability to secure data and defend against potential attacks. One way the security issues can be potentially solved is through the technology of blockchains.

![Voter authenticates himself and casts vote](https......)

Blockchain technology originates from the underlying architectural design of the crypto currency bitcoin. It is a form of distributed database where records take the form of transactions, a block is a collection of these transactions. With the use of blockchains a secure and robust system for digital voting can be devised.

![Block added to the blockchain](https....)

To solve the problem, We propose a way to use the blockchain to ensure the features of the e-voting. The blockchain technology is characterized by decentralization, irreversibility, distribution of joint accounting, asymmetric encryption and data-security.

OUR IDEA

In our system we will make use of sql server to provide a platform for users (admin and voters) to sign up and login to our system. We make use of 2 tables, namely:

Insert_voter (name, voter_id, contact)
Signup (name, username, password, repassword)
In order to connect to the sql server, we have a php file named connection.php where all the set up for the connection to the sql is made.

To interact with our sql server from the front end we have php programs in the login folder of the front end of the admin and that of the voter to process the logic of our software and then we will deploy our system to the Microsoft azure cloud platform.
