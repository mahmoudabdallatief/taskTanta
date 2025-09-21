# Products

## ⚙️ Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/products.git
   cd products
   Approach
   1.Install dependencies
    composer install
    npm install && npm run dev
   2.Environment setup
                                                                                                                                        انسخ ملف .env.example إلى .env
                                                                                                                                                 عدل إعدادات قاعدة البيانات
   3.Generate application key
       php artisan key:generate
   4.Run migrations
       php artisan migrate --seed
   5.Run the server
       php artisan serve
   6-Run tests
       php artisan test
   
   Approach
                                                                                                                            استخدام Laravel MVC structure لتنظيم الكود.

                                                                                                                الاعتماد على Migrations في إنشاء قاعدة البيانات (جدول المنتجات).

                                                                                                               بناء RESTful API لتسهيل التعامل مع المنتجات عبر الـ endpoints.

                                                                                                      إضافة Unit Tests للتأكد من إن إنشاء المنتجات عبر الـ API بيشتغل بشكل صحيح.

                                                                                                          الهدف إن أي مطور يقدر يعمل clone ويشغّل المشروع بسهولة بخطوات واضحة.

       
       
