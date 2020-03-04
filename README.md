**Must-have features
Step 1**

- Create an interface called transform, that requires one public method called transform, this function accepts a string and returns a string.

- Make a class that capitalizes every other letter in a string (eg: "hElLo WoRlD"). Implement the transform interface.

- Make another class that changes all spaces to dashes "-" (eg: "hello-world-i-love-to-code"). Implement the transform interface.

- Make a logger class that logs messages in a file called "log.info".

**Step 2**

__Now make a "master" class that accepts a user input (simple form with 1 field). It should do the following.__

- You log the message
  You echo it to the screen using the weird capitalization
  Reuse the classes you made inside the master class, but you should not use the keyword "new" inside the master class. Pass it to the constructor.

- To type hint the string transformation class, use the name of the transform interface instead of the concrete class you are using: you will see in step 3 why.

- You can execute this master class in a simple controller.

****Step 3: Polymorphism
Add a dropdown with 2 options in your form (keep it simple, just an html dropdown will be enough for now). The 2 options are the names of the 2 classes you made that transform a string. Make it so that depending on the user input one transformation is applied.****

- Do not change anything in your master class file!

- If you did the previous step correctly you should be able to change the behavior of the master class without having to change any code in the master class!

- This is a really powerful concept called polymorphism. It is made possible because both classes use the same interface, so they have the same function names: the code that uses this class does not care about which one it gets, as long as it has a function called transform.

- In short: When two objects have the same interface, they are functionally interchangeable = polymorphism.