# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

Skrypty dotyczące polskiej Ustawy o grah hazardowych

Wywołanie skryptu wygeneruje gotowy kod rsc dla Mikrotika, który można wrzucić następnie do automatycznego wywoływania (/system scheduler):

:log info "Removing old MF BlackList"
:if ([:len [/file find name=hazard.rsc]] > 0) do={/file remove hazard.rsc }
:log info "Downloading new MF BlackList"
/tool fetch url="http://lokalizacja/sktyptu/mikrotik.php" dst-path=hazard.rsc mode=http
:log info "Importing new MF BlackList"
/import file-name=hazard.rsc

### How do I get set up? ###

* Summary of set up
* Configuration
* Dependencies
* Database configuration
* How to run tests
* Deployment instructions

### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact