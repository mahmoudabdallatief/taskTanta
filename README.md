

## ⚙️ Setup Instructions

  1.Clone the repository

       git clone https://github.com/mahmoudabdallatief/taskTanta.git
      
       cd taskTanta
      
   2.Install dependencies

       composer install
      
   3.Environment setup

       Copy the .env.example file to .env
      
       Update your database configuration inside .env
       
   4.Generate application key

       php artisan key:generate
       
   5.Run migrations

       php artisan migrate
       
   6.Run the server

       php artisan serve
       
   7.Run tests

       php artisan test
       
   
  ## ⚙️ Approach
   
   Used Laravel MVC structure to organize the code.
   
   Relied on Migrations to create and manage the database (products table).
   
   Built a RESTful API to handle products via endpoints.
   
   Added Unit Tests to verify product creation through the API.
   
   The main goal is to make it easy for any developer to clone and run the project with clear, straightforward steps.
   

       
       
