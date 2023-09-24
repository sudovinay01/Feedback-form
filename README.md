# Feedback-form

![Screenshot 2023-09-24 144819](https://github.com/sudovinay01/Feedback-form/assets/54681400/674eb0d6-d8e8-45ee-afe4-b401e1e1e7c7)


Made it in my b.tech 😋.

A feadback system for taking feaadback and downloading it in a excel file.

## Pre-requirements
- Wamp server
- code

## Setup
- Download wamp server and install it.
- Start wamp server
- Copy the folder `peer` in repo to www folder of wampserver. `repository/peer -> wamp/www/peer`
- Create a database named `peer` and import `peer.sql` into database.
  - you can use phpmyadmin at http://localhost/phpmyadmin/ (default user name is 'root' and no password)
- Setup complete.

## Use 
- http://localhost/peer/ hase the feedback forms to be filled.
- download responce from http://localhost/peer/a.php
