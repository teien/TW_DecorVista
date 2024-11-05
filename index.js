const express = require('express');
const app = express();
const port = 3000;

// Sử dụng EJS làm template engine
app.set('view engine', 'ejs');

// middleware để lấy dữ liệu từ POST request
app.use(express.urlencoded({ extended: true }));


// Import routes
const userRoutes = require('./routes/userRoutes');

// Sử dụng router cho các route liên quan đến người dùng
app.use('/users', userRoutes);

// Lắng nghe server tại cổng 3000
app.listen(port, () => {
  console.log('Server is running on port ' + port);
});

