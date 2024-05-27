<?php
//users
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/logout', 'User,logout');
$this->addRoute('User/check2fa', 'User,check2fa');
//customers
$this->addRoute('Customer/update', 'Customer,update');
$this->addRoute('Customer/checkout', 'Order,createOrder');
$this->addRoute('Customer/deactivate', 'Customer,deactivate');
$this->addRoute('Customer/dashboard', 'Customer,dashboard');
$this->addRoute('Customer/paypal', 'Customer,paypal');
$this->addRoute('Customer/orders', 'Order,viewCustomerOrdersForCustomer');
$this->addRoute('Customer/sucess', 'Order,sucessfullOrder');
$this->addRoute('Customer/verifyOldPassword', 'Customer,verifyOldPassword');
$this->addRoute('Customer/disable2fa', 'Customer,disable2fa');

//products
$this->addRoute('Product/listing', 'Product,listings');
$this->addRoute('Product/index', 'Product,description');
$this->addRoute('Product/search', 'Product,search');
$this->addRoute('Product/more', 'Product,allBrands');
//admins
$this->addRoute('Admin/index', 'Admin,index');
$this->addRoute('Admin/create', 'Admin,create');
$this->addRoute('Admin/productListing', 'Admin,listings');
$this->addRoute('Admin/customerList', 'Admin,customerList');
$this->addRoute('Admin/disableCustomer', 'Admin,deactivate');
$this->addRoute('Admin/enableCustomer', 'Admin,reactivate');
$this->addRoute('Admin/orders', 'Admin,viewCustomerOrders');
$this->addRoute('Admin/order', 'Order,viewCustomerOrder');
$this->addRoute('Admin/changeTable', 'Order,changeTable');
//employee
$this->addRoute('Employee/creation', 'Employee,register');
$this->addRoute('Employee/index', 'Employee,index');
$this->addRoute('Employee/modify', 'Admin,modify');
//wishlist
$this->addRoute('Wishlist/add', 'Wishlist,addToWishlist');
$this->addRoute('Wishlist/remove', 'Wishlist,removeFromWishlist');
$this->addRoute('Wishlist/show', 'Wishlist,displayWishlist');
//ticket
$this->addRoute('Ticket/create', 'Ticket,createTicket');
$this->addRoute('Ticket/ongoing', 'Ticket,currentTickets');
$this->addRoute('Ticket/allTickets', 'Ticket,currentTicketsForSpecificCustomer');
$this->addRoute('Ticket/index', 'Ticket,descriptionForCustomer');
$this->addRoute('Ticket/indexEmployee', 'Ticket,descriptionForEmployee');
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
//order
$this->addRoute('Order/createOrder', 'Order,createOrder');
$this->addRoute('Order/charge', 'Order,charge');
// $this->addRoute('OrderCus/search', 'Customer,search');
//cart
$this->addRoute('Cart/removeCart', 'Cart,removeFromCart');
$this->addRoute('Cart/addCart', 'Cart,addToCart');
$this->addRoute('Cart/view', 'Cart,viewCart');

$this->addRoute('Customer/setup2fa', 'Customer,setup2fa');

//default page
$this->addRoute('', 'User,index');