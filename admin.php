<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/admin.css">
    <link rel ="stylesheet" href ="styles/stylesheet.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage" alt="Aurora Bliss Logo"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT US</a></li>
                    <li><a href="ourFeatures.php">OUR FEATURES</a></li>
                    <li><a href="venue.php">VENUE</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contactUs.php">CONTACT US</a></li>
                </ul>
            </nav>
            <a href="weddingreservation.php">
              <button type="button" class="booking-btn">Booking Request</button>
            </a>
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>
<main>
    <div class="admin-panel">
        <div class="admin-section">
            <div class="admin-profile">
                <h3>Admin Panel</h3>
                <div class="profile-info">
                    <img src="images/profile-pic/pic1.png" alt="Profile Picture">
                    <div class="admin-details">
                        <p><strong>Employee Name:</strong> John Doe</p>
                        <p><strong>Employee ID:</strong> IT5643434</p>
                    </div>
                    <button class="update-button">Update Profile</button>
                </div>
            </div>
    
            <div class="system-info">
                <div class="info-box">
                    <h4>Server Uptime</h4>
                    <p>99.9%</p>
                </div>
                <div class="info-box">
                    <h4>Active Users</h4>
                    <p>120 Users Online</p>
                </div>
                <div class="info-box">
                    <h4>System Load</h4>
                    <p>Moderate (65%)</p>
                </div>
                <div class="info-box">
                    <h4>Recent Backups</h4>
                    <p>Last Backup: August 8, 2024, 2:00 AM</p>
                </div>
            </div>
    
            <div class="server-status">
                <h3>Server Status</h3>
                <div class="status-item">
                    <p>Server Connection:</p> 
                    <span class="status connected">Connected</span>
                </div>
                <div class="status-item">
                    <p>Automatic Backup:</p> 
                    <span class="status on">ON</span>
                </div>
                <div class="status-item">
                    <p>Backup Server:</p> 
                    <span class="status disconnected">Disconnected</span>
                </div>
                <div class="status-item">
                    <p>Payment Gateway:</p> 
                    <span class="status connected">Connected</span>
                </div>
            </div>
    
            <div class="security-overview">
                <h3>Security Overview</h3>
                <textarea readonly>
                    * Multiple failed login attempts detected from IP address 192.168.1.45; possible brute-force attack.
                    * Critical security patch available; current version vulnerable to known exploits.
                    * Unauthorized access attempt blocked from an unrecognized device.
                    * High number of user account lockouts observed; possible targeted attacks on user accounts.
                    * SSL certificate expired on August 8, 2024; renewal needed to avoid security warnings.
                </textarea>
            </div>
    
            <div class="admin-controls">
                <button class="restart-server">Restart Server</button>
                <button class="reset-everything">Reset Everything</button>
                <button class="download-logs">Download Logs</button>
            </div>
        </div>
    
        <div class="user-management">
            <h3>Manage User Accounts</h3>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>UserID</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Janice Monahan</td>
                        <td>rjEZYPBn</td>
                        <td>Janice_Monahan@yahoo.com</td>
                        <td><button class="action-button">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Rollin Fadel</td>
                        <td>ALGUtyjs</td>
                        <td>Rollin_Fadel@gmail.com</td>
                        <td><button class="action-button">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Lera Stroman</td>
                        <td>Oi8pdawt</td>
                        <td>Lera_Stroman3@gmail.com</td>
                        <td><button class="action-button">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Adan Schiller</td>
                        <td>H0KxRyoJ</td>
                        <td>Adan_Schiller19@yahoo.com</td>
                        <td><button class="action-button">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="payments-section">
            <h3>Payments</h3>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>UserID</th>
                        <th>Transaction_ID</th>
                        <th>Date and Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Janice Monahan</td>
                        <td>rjEZYPBn</td>
                        <td>YOmP1XjOHZLv</td>
                        <td>2024-10-08 12:23</td>
                        <td class="status success">Success</td>
                    </tr>
                    <tr>
                        <td>Rollin Fadel</td>
                        <td>ALGUtyjs</td>
                        <td>YcsrFkaG3Dg8</td>
                        <td>2024-09-15 08:45</td>
                        <td class="status success">Success</td>
                    </tr>
                    <tr>
                        <td>Lera Stroman</td>
                        <td>Oi8pdawt</td>
                        <td>zWOcJoSbEUT</td>
                        <td>2024-11-22 14:30</td>
                        <td class="status error">Failed</td>
                    </tr>
                    <tr>
                        <td>Adan Schiller</td>
                        <td>H0KxRyoJ</td>
                        <td>OMA0rJ3mkO4N</td>
                        <td>2024-12-01 19:12</td>
                        <td class="status success">Success</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</main>
<footer>
    <div class="container">
        <div class="logo"> 
            <a href="index.php"><img src="images/logo_1.jpg" id="logoimage" alt="Aurora Bliss Logo"></a>
        </div> 
        <div class="social">
            <a href="https://www.instagram.com"><img src="images/socialmedia/instagram.jpeg" alt="Instagram"></a>
            <a href="https://www.facebook.com"><img src="images/socialmedia/facebook.png" alt="Facebook"></a>
            <a href="https://www.x.com"><img src="images/socialmedia/x.png" alt="X"></a>
            <a href="https://www.linkedin.com"><img src="images/socialmedia/linkedin.png" alt="LinkedIn"></a>
        </div>

        <div class="subscribe">
            <h3>Subscribe to Our Newsletter</h3>
            <form id="subscribeForm" method="POST" action="">
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="legal">
            <div class="bottomlinks">
                <p> 
                    <a href="termsAndConditions.php"> Terms and Conditions </a> | 
                    <a href="privacyPolicy.php"> Privacy and Cookies Policy </a> | 
                    <a href="FAQ.php"> FAQ </a> | 
                    <a href="careers.php"> Work with us </a>
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
