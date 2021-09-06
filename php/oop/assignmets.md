# ✍️ OOP assignments

Below titles are just funny, **More stars = More complexity**. Feel free to ask your questions
## 📧 A Valid user `*`
Create a `User` class that has an email property. The email property must be a valid email address. The user has the ability to change email address.

## 📡 Request time `*`
Create a request class, it provides below methods:
- get(string $url): void
- post(string $url): void
- countOfCalls(): int
- countOfCallFor(string $method): int

## 🦍 Zoobject `**`
We're in a zoo, let's help them with OOP.
There are some Animals, each animal could move, has its own sound, they may be wild or domestic, some of them could given birth (parturition). Wild animals could hunt only wild animals

## 1️⃣ How a singleton object works? How to implement a singleton? `***`
## 📰 Easy kind of medium!
> Below scenario has shared to next 3 assignments in 3 different levels

Create a Post class, Each post has title, content, and author. Every post has many comments and we should be able to add comments to each post. You may implement the assignment in 3 levels of complexity:

- **Level I** `*`
    - Each comment is a string
    - Author is a string
- **Level II** `**`
    - Each comment is an object contains of these properties:
        - user [string]
        - content [string]
        - submitedAt [DateTimeImmutable]
    - The author is a valid User object you created in the first assignment
    - There is a functionality to remove comments with an identifier
- **Level III** `***`
    - Each comment has likes/dislikes, It's posible to like/dislike comments
    - A post can be archived
    - Assign an identifier to each post
    - Create a PostRepository in order to create/update/remove/find/sort posts
