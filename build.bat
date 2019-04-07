@echo off
cd MonopolyEventCards
ng build --prod && copy /Y dist\* ..