-- Insert data into categories table
INSERT INTO categories (id, title) VALUES
                                       (1, 'Electronics'),
                                       (2, 'Clothing'),
                                       (3, 'Home and Living'),
                                       (4, 'Books'),
                                       (5, 'Sports');

-- Insert data into tva table (assuming one fixed tax rate for all products)
INSERT INTO tva (id, tva) VALUES
    (1, 20.0);

-- Insert data into products table
INSERT INTO products (id, title, description, priceTTC, weight, tva, stock, categories_id, tva_id, price_HTT) VALUES
                                                                                                                 (1, 'Laptop', 'Powerful laptop for work and gaming', 1200.00, 2, 1, 50, 1, 1, 1000.00),
                                                                                                                 (2, 'T-Shirt', 'Comfortable cotton T-shirt', 20.00, 0.2, 1, 100, 2, 1, 16.67),
                                                                                                                 (3, 'Sofa', 'Large comfortable sofa for your living room', 800.00, 30, 1, 10, 3, 1, 666.67),
-- Add more products with short descriptions as per your requirement

-- Insert data into clients table
INSERT INTO clients (id,first_name,last_name,email,password) VALUES
    (1,'John','Doe','john.doe@example.com','password123'),
    (2,'Alice','Smith','alice.smith@example.com','securepass');
-- Add more clients as needed

-- Insert data into order table
INSERT INTO `order` (id, number, order_date, ship_date, clients_id) VALUES
    (1, 1001, '2024-02-01', '2024-02-05', 1),
    (2, 1002, '2024-02-02', '2024-02-06', 2);
-- Add more orders as needed

-- Insert data into products_has_order table
INSERT INTO products_has_order (products_id, order_id, amount) VALUES
    (1, 1, 2),
    (2, 1, 3),
    (3, 2, 1),
-- Add more product-order relationships as needed
