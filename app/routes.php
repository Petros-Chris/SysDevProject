<?php
//users
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/logout', 'User,logout');
//customers
$this->addRoute('Customer/update', 'Customer,update');
$this->addRoute('Customer/checkout', 'Order,createOrder');
$this->addRoute('Customer/deactivate', 'Customer,deactivate');
$this->addRoute('Customer/dashboard', 'Customer,dashboard');
$this->addRoute('Customer/paypal', 'Customer,paypal');

//products
$this->addRoute('Product/listing', 'Product,listings');
$this->addRoute('Product/index', 'Product,description');
$this->addRoute('Product/search', 'Product,search');
$this->addRoute('Product/more', 'Product,allBrands');

// $this->addRoute('Product/eyeglasses','Product,listingFliter');
//admins
$this->addRoute('Admin/index', 'Admin,index');
$this->addRoute('Admin/modify', 'Admin,modify');
$this->addRoute('Admin/create', 'Admin,create');
$this->addRoute('Admin/productListing', 'Admin,listings');
$this->addRoute('Admin/customerList', 'Admin,customerList');
$this->addRoute('Admin/disableCustomer', 'Admin,deactivate');
$this->addRoute('Admin/enableCustomer', 'Admin,reactivate');
//employee
$this->addRoute('Employee/creation', 'Employee,register');
$this->addRoute('Employee/index', 'Employee,index');
//wishlist
$this->addRoute('Wishlist/add', 'Wishlist,addToWishlist');
$this->addRoute('Wishlist/remove', 'Wishlist,removeFromWishlist');
$this->addRoute('Wishlist/displaytest', 'Wishlist,displayWishlist');
//ticket
$this->addRoute('Ticket/create', 'Ticket,createTicket');
$this->addRoute('Ticket/ongoing', 'Ticket,currentTickets');
$this->addRoute('Ticket/allTickets', 'Ticket,currentTicketsForSpecificCustomer');
$this->addRoute('Ticket/index', 'Ticket,description');
//ticketMessage
$this->addRoute('Ticket/createMessage', 'TicketMessage,createMessage');
//review
$this->addRoute('Review/create', 'Review,create');
$this->addRoute('Review/edit', 'Review,update');
$this->addRoute('Review/delete', 'Review,delete');
$this->addRoute('Review/byUser', 'Review,displayUserReview');
//misc
$this->addRoute('contact', 'User,contact');
$this->addRoute('about', 'User,about');
$this->addRoute('home', 'User,index');
//paypal
$this->addRoute('Order/charge', 'Order,charge');
$this->addRoute('Order/success', 'Order,success');
//order
$this->addRoute('Order/createOrder', 'Order,createOrder');

$this->addRoute('Admin/orders', 'Admin,viewCustomerOrders');
$this->addRoute('Admin/order', 'Order,viewCustomerOrder');
$this->addRoute('Customer/orders', 'Order,viewCustomerOrdersForCustomer');

$this->addRoute('Cart/removeCart', 'Cart,removeFromCart');
$this->addRoute('Cart/addCart', 'Cart,addToCart');
$this->addRoute('Cart/view', 'Cart,viewCart');