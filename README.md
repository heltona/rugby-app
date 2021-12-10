# rugby-app

I have good news for you Joanne. Let's go throught it:

1. Spreadsheet is a poor way of mantaining data. The new thing (well, not so new) is relational database. You can migrate your spreadsheet here: 
    /migrate-spreadsheet

2. Do you remember that excruciating task of copying and pasting from a xml file. You don't need to do it anymore. You can migrate the xml here:
    /migrate-xml

3. I really don't know whence do you get phone and mail from the fans, considering you don't have any means of contact. But wherever it is, you can check the records here:
    /all-fans
the incomplete (no phone, no mail) ones here:
    /incomplete-fans
in this url you will have a link to complete. The link looks like that:
    /individual-fan/{id}
    
4. New fans can be created here:
    /create-new-fan

5. When you want say hello to the fans, just go to this link:
    /send-email
just click the button, and the fans will have a little word from you. They will love it!

6. You can build the table with PROJECT_ROOT/db.sql

7. Yes, the interface sucks, there is no logic to check if the fan (through documento) exists already, there could be a rest service so the store migrates the xml all by themselves, but we must understand, I was really not paid for this job.

Now among us, Joanne. This boss of yours is not really a good person. Fire that poor girl and pile up all this work on you lap. Not pretty! No pretty!
    
