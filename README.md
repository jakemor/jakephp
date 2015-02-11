# jakephp

## Goal: A minimalist PHP web framework for beginners.

### Installation instructions:
- ensure apache2, php, and sqlite are installed (LAMP/MAMP stacks work great)
- git clone https://github.com/jakemor/jakephp.git
- move all files from newly created jakephp directory to home directory (wherever <your-domain>.com points to, don't forget about the invisible .htaccess file. THIS IS CRUCIAL.)
- navigate to <your-domain>.com, you should see a welcome page
- if you run into reading/writing errors, run "chmod 777 /your/project/directory" from the terminal

### Things to keep in mind:
- url structure: domain.com/view-controller-function/$args[0]/$args[1]/$args[2]...
- access the $args variable from functions defined in controllers.php
- add helper functions to helpers.php (functions in controllers.php that begin with "_" are not recognized as pages). I've added a few already.
- _everypage() in controllers.php is called before every page call, useful for showing debuging info on top of every page. remove the function calls in index.php to remove this feature if you like.
- see settings.php, self explanatory.
- variables set before a page is delivered from a function in controllers.php (via "include views/home.php") are local to that file.
- only mess with .htaccess, index.php, and Model.php if you must.

### Learn by Example (security best practices ignored in this example)
1. create a User model in models.php
```
	class User extends Model {
		public $name;
		public $height;
		public $createdAt; 
		// unique id added + incremented automatically (called $id)
	}
```

2. create a function called "newUser" in controllers.php (this function is called when someone visits domain.com/newUser)
```
	function newUser() {
		$user = new User(); 
			$user->name = $_POST["name"]; 
			$user->height = $_POST["height"];
			$user->createdAt = time();
			$user->save(); 

		header("Location: /home"); 
	}
```

3. make a form that posts to domain.com/newUser in views/home.php
```
    <h4>New User</h4>
    <form action="/newUser" method="post">
      Name: <input type="text" name="name"><br>
      Height: <input type="text" name="height"><br>
      <input type="submit" value="Submit">
    </form>
```

4. see domain.com/admin (password admin), you hould see your newly added users! use the following methods to perform basic crud operations. See jakephp/Model.php if you don't understand how one works.
```
	$user = new User()
		$user->search(string $key, string $value) returns array with search results
		$user->get(string $key, string $value) (sets $user uqual to last object saved with key, value)
		$user->save(string $key, string $value) saves/updates a new object in the database
		$user->delete() use after $user->get to delete an object from database
```
5. create a static folder at root level to add css, images, etc

6. Contact me for questions, I'll answer every email :) www.jakemor.com

