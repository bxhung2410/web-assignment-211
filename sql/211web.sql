DROP database IF EXISTS web211;
CREATE DATABASE web211;
USE web211;

create table `customer` (
    `customer_id` int(10),
    `customer_name` varchar(255),
    primary key (customer_id)
);

create table `category` (
    `category_id` int(10),
    `category_name` varchar(255),
    primary key (category_id)
);

create table `orderr` (
    `customer_id` int(10),
    -- `customer_name` varchar(255),
    `order_id` int(10),
    `order_date` datetime,
    `total_price` int(10),
    `status` enum('created','paid','complete'),
    primary key (order_id),
    foreign key(customer_id) references customer(customer_id) ON DELETE CASCADE ON UPDATE CASCADE
    -- foreign key(customer_name) references customer(customer_name) ON DELETE CASCADE ON UPDATE CASCADE
);

create table `product` (
    `product_id` int(10),
    `product_name` varchar(255),
    `product_quantity` int(10),
    `category_id` int(10),
    `price` int(10),
    `avatar` varchar(255),
    `description` varchar(255),
    `detail` varchar(255),
    `manual` varchar(255),
    primary key (product_id, category_id),
    foreign key (category_id) references category(category_id) ON DELETE CASCADE ON UPDATE CASCADE
);

create table `order_product` (
    `order_id` int(10),
    `product_id` int(10),
    `order_quantity` int(10),
    primary key (product_id, order_id),
    foreign key (order_id) references orderr(order_id) ON DELETE CASCADE ON UPDATE CASCADE,
    foreign key (product_id) references product(product_id) ON DELETE CASCADE ON UPDATE CASCADE
);

create table `useradmin` (
    `admin_id` int(10),
    `admin_name` varchar(255),
    `email` varchar(255),
    `password` varchar(255),
    primary key (admin_id)
);
