# bokrejset_sara
A simple OOP demo with PHP and MySQL for students. All comments and readme in swedish.

## Beskrivning av BokRejset

Vi vill bygga en webbtjänst där användare kan logga böcker de läst, antal sidor och recension för boken. En användares totala antal lästa sidor ska visas i en high-score-tabell. Syftet är att uppmuntra personer att läsa böcker.

Utöver denna grundidé kan man bygga flera ytterligare funktioner beroende på målgrupp och en mer utförlig beskrivning av syftet med tjänsten. Utmaningen är att bygga vidare på databasen, utöka koden med fler klasser och skala upp systemet men samtidigt arbeta smart, snyggt och OOP.

## En första version av databasen

Vi behöver lagra användare och vilka böcker de läst dvs tre tabeller. Vi börjar där: User, Book, Review.

Mer koda OOP + PDO + MySQL
En första liten version av bokrejset finns här https://github.com/niklas-mardby/bokrejset-php

Första övningarna på koden ovan:
2. Utöka tabellen users och visa mer info från den tabellen i en lista
3. Lägg till en tabell books och visa info från den tabellen i en lista
4. Lägg till en tabell reviews som kopplar samman bok med användare och visa info från den tabellen i en lista

Andra omgången övningar:
1. Lägg till klasserna Book och Review som kopplas till tabellerna med samma namn
2. Lägg till klasserna BookView och ReviewView som visar upp data från Book och Review
3. Lägg till fler kolumner i tabellerna, fler view/render-funktioner!

Mer övningar!
1. Gör listan med users klickbar. När man klickar på en user visas den användarens info med: antal böcker lästa, antal sidor lästa och alla reviews.
2. Gör listan med books klickbar. När man klickar på en bok får man upp all info om boken (ur tabellen books) samt alla reviews om den boken samt vem som skrev dem.
3. Gör ett sökfält där man kan söka på en bok, skapa en klickbar lista med böcker med söksvaret


DATABASER:
1. Elever:
users
id int PK
first_name varchar 25 tecken
last_name varchar 25 tecken
class varchar 20 tecken

sql fråga för att lägga till elev:
INSERT INTO `users`(`first_name`, `last_name`, `class`) VALUES ('[value-1]','[value-2]','[value-3]')

2. Böcker:
books
id int PK
title varchar 50 tecken
author varchar 50 tecken
year int
blurb varchar 200 tecken
pages int