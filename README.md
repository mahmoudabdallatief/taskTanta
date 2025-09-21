# Products

## ⚙️ Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/mahmoudabdallatief/taskTanta.git
   cd taskTanta
   Approach
   1.Install dependencies
    composer install
    npm install && npm run dev
   2.Environment setup
       Copy the .env.example file to .env
       Update your database configuration inside .env
   3.Generate application key
       php artisan key:generate
   4.Run migrations
       php artisan migrate --seed
   5.Run the server
       php artisan serve
   6-Run tests
       php artisan test
   
   Approach
   
       Used Laravel MVC structure to organize the code.
   
       Relied on Migrations to create and manage the database (products table).
    
       Built a RESTful API to handle products via endpoints.
    
      Added Unit Tests to verify product creation through the API.
    
      The main goal is to make it easy for any developer to clone and run the project with clear, straightforward steps.

       
       
