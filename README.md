neomonsters
===========

Created back in 2013, this is backend code for a Neopets-inspired petsite. This was made at the behest of a few friends who were interested in making their own site based off of Neopets; however, it never went off the ground and the site was not finished.

The basic concept of a petsite like this is for users to care for virtual animals. Players create or adopt new pets, then interact with them in various ways, by feeding them, reading them books, and even changing their appearance by "painting" them new colors.

The plan at the time was for me to create the scaffolding for the backend, writing everything which touched the database, then pass it off to another person who would create the frontend gameplay and call on my prewritten methods as necessary. For that reason my focus was on creating CRUD methods.

This was my first experience with backend web development and PHP, which I taught myself while working on the project. It was all written in about two weeks before the project was cancelled.

Features of the site:
-

Accounts:
- Create an account with a unique username attached to an email address. Each account can own a certain number of pets; the exact number is dependant on the account (the eventual goal was to allow players to increase this number during gameplay)
- Accounts have an inventory of items as well as a store of money. They have a gallery as well to display the items they own.
- One of the player's pets is set as "active." This pet would be the one displayed on each page, as well as the one which could be interacted with. Users can change their active pet at any time.


Pets:
- Players can create new pets, specifying a unique name as well as selecting a species and color from a predetermined list.
- Some colors and species would be set as "restricted" or "limited edition" meaning that they would not be available to create freely.
- Pets could have their species and color altered by certain items or performing certain tasks in the game.
- Pets each have a "Petpage" which is a place where users can add their own custom text to describe their pet.
-

Items:
- Players could obtain a number of different items, most of which focused on modifying pet stats. The categories for items were Books, Food, Plushies, Paintbrushes, and Potions.
- Books and Food would be used to care for pets.
- Paintbrushes and Potions would alter a pet's color and species respectively.
- Plushies were collectible items for users to display in their galleries.
- Items fell under "themes," such as "halloween plushies" or "chocolate foods", which could be used for sorting.


Administrative Abilities:
- A priority for this project was to create a site which could be easily taken over by others. With that in mind, a number of assistant methods were created.
- the 'mysqli_functions' file contains basic CRUD actions for the various tables in the database. This was for frontend programmers to be able to access and alter the database.
- Additionally, a number of admin pages were created to provide a UI for adding/updating/deleting items to the database without needing any programming knowledge. This was for administrators who wanted the ability to release new content without touching any code.
