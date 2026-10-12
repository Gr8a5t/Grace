<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Faith Connect') }} | Your Community. Your Church.</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!-- Navigation -->
  <header>
    <div class="logo">
      <h2 style="color: white; margin: 0; font-size: 24px; letter-spacing: 1px;">FAITH CONNECT</h2>
    </div>
    <nav class="nav-links">
      <a href="#home">Home</a>
      <a href="#about">Pages</a>
      <a href="#ministries">Sermons</a> 
      <a href="#donations">Donations</a>
      <a href="#blog">Blog</a>
    </nav>
    <div class="header-right">
      <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="nav-actions">
        <button class="btn btn-primary">Give!</button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-green-shape">
      <div class="sunday-floating">
        <span class="section-tag" style="margin-bottom: 5px; color: #fff; opacity: 0.8;">9:00 AND 11:00 AM</span>
        <p class="script-text" style="font-size: 18px; margin: 0; color: #FFD700;">Join Us</p>
        <h3>SUNDAYS</h3>
        <p style="font-size: 10px; opacity: 0.7; margin-top: 10px;">On demand starting at 5:00 p.m.</p>
      </div>
    </div>
    <div class="container hero-wrapper">
      <div class="hero-content">
        <h1>YOUR COMMUNITY.<br><span>YOUR CHURCH.</span></h1>
        <p>Connecting people to God and to each other.</p>
        <div class="hero-btns">
          <button class="btn btn-primary" style="background: #F05A28; border: none;">JOIN US THIS SUNDAY</button>
          <button class="btn btn-outline" style="background: rgba(255,255,255,0.1); border: 1px solid white;">WATCH LIVE</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Welcome Section -->
  <section class="welcome container" id="about">
    <div class="welcome-img-stack">
      <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&q=80&w=1000" alt="Church" class="img-main">
      <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?auto=format&fit=crop&q=80&w=600" alt="Hands" class="img-sub">
    </div>
    <div class="welcome-content">
      <span class="section-tag">Welcome To</span>
      <h2>FAITH CONNECT CHURCH</h2>
      <p>We are a warm and welcoming community of believers committed to growing in faith, serving others, and sharing the love of Christ. Whether you're exploring faith for the first time or looking for a church to call home, we invite you to join us.</p>
      <div style="margin-top: 30px;">
         <p class="script-text">You belong here.</p>
         <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300" alt="Community" style="border-radius: 10px;">
      </div>
    </div>
  </section>

  <!-- Community Grid -->
  <section class="about-split container">
    <div class="about-img">
      <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?auto=format&fit=crop&q=80&w=1000" alt="Worship">
    </div>
    <div class="about-text">
       <span class="section-tag">Who we are</span>
       <h2 style="font-size: 40px; margin-bottom: 20px;">A CHRIST-CENTERED COMMUNITY FOR WORSHIP & GROWTH</h2>
       <p>Community Church is an independent, Christ-centered congregation dedicated to worship, spiritual growth, and serving our neighbors. We believe in creating a space where people can authentically encounter God, deepen their faith, and build meaningful relationships.</p>
       <button class="btn btn-primary" style="margin-top: 30px;">About Us</button>
    </div>
  </section>

  <!-- Ministries -->
  <section class="ministries" id="ministries">
    <div class="container">
      <div class="ministry-header">
         <h1 style="font-size: 60px;">OUR MINISTRIES</h1>
         <p class="script-text">You're always welcome here.</p>
      </div>
      <div class="ministry-grid">
        <div class="ministry-card">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=600" alt="Children">
          <div class="ministry-overlay">
            <h3>Children's Ministry</h3>
            <a href="#" style="color: var(--primary); font-size: 12px; font-weight: bold;">LEARN MORE ↗</a>
          </div>
        </div>
        <div class="ministry-card">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600" alt="Youth">
          <div class="ministry-overlay">
            <h3>Youth Ministry</h3>
            <a href="#" style="color: var(--primary); font-size: 12px; font-weight: bold;">LEARN MORE ↗</a>
          </div>
        </div>
        <div class="ministry-card">
          <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=600" alt="Small Groups">
          <div class="ministry-overlay">
            <h3>Small Groups</h3>
            <a href="#" style="color: var(--primary); font-size: 12px; font-weight: bold;">LEARN MORE ↗</a>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 50px;">
        <button class="btn btn-primary">ALL MINISTRIES</button>
      </div>
    </div>
  </section>

  <!-- Upcoming Events -->
  <section class="container" id="events" style="padding-top: 100px;">
    <div style="text-align: center; margin-bottom: 60px;">
      <h2 style="font-size: 70px; line-height: 0.8;">UPCOMING<span>EVENTS</span></h2>
      <p class="script-text">Come as you are.</p>
      <p style="max-width: 600px; margin: 0 auto;">Stay connected with what’s happening at Community Church! From worship nights and Bible studies to outreach programs, there's always something for everyone.</p>
    </div>
    
    <div class="events-list">
      <div class="event-row">
        <div class="event-date">
          <span>TUE</span>
          <h4>14</h4>
        </div>
        <div style="flex: 2;">
          <h3 style="margin-bottom: 5px;">Weekly Bible Study Group</h3>
          <p style="font-size: 14px; color: var(--text-muted);">Dive deeper into God’s Word with us! Join our weekly Bible study for meaningful discussions and spiritual growth.</p>
        </div>
        <button class="btn" style="border: 1px solid #ddd; font-size: 10px;">VIEW DETAILS</button>
      </div>
      <div class="event-row">
        <div class="event-date">
          <span>SAT</span>
          <h4>18</h4>
        </div>
        <div style="flex: 2;">
          <h3 style="margin-bottom: 5px;">Young Adults Connect</h3>
          <p style="font-size: 14px; color: var(--text-muted);">A space for young adults to gather, grow in faith, and build lasting friendships. Join us for discussions, worship and fun.</p>
        </div>
        <button class="btn" style="border: 1px solid #ddd; font-size: 10px;">VIEW DETAILS</button>
      </div>
    </div>
    <div style="text-align: center; margin-top: 40px;">
       <button class="btn btn-primary">VIEW ALL EVENTS</button>
    </div>
  </section>

  <!-- Featured Sermons -->
  <section id="sermons" style="background: #1A2E26; color: white; padding: 100px 5%;">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px;">
        <div>
          <span class="section-tag" style="color: #6DAE98;">SERVING WITH LOVE</span>
          <h2 style="font-size: 50px;">FEATURED SERMONS</h2>
        </div>
        <div style="display: flex; gap: 10px;">
           <button class="btn" style="padding: 10px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.2); color: white;">←</button>
           <button class="btn" style="padding: 10px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.2); color: white;">→</button>
        </div>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div class="sermon-card">
          <div style="position: relative; border-radius: 12px; overflow: hidden; margin-bottom: 20px;">
             <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=600" alt="Sermon 1">
             <div style="position: absolute; bottom: 15px; left: 15px; display: flex; gap: 10px;">
                <span style="background: #F05A28; padding: 5px 10px; border-radius: 4px; font-size: 12px;">🎵</span>
                <span style="background: #F05A28; padding: 5px 10px; border-radius: 4px; font-size: 12px;">🎥</span>
             </div>
          </div>
          <p style="font-size: 10px; opacity: 0.6;">NOVEMBER 22, 2025</p>
          <h4 style="margin: 10px 0;">Walking in Faith: Trusting God in Uncertain Times</h4>
          <div style="display: flex; align-items: center; gap: 10px; font-size: 12px; margin-top: 15px;">
             <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=100" alt="Speaker" style="width: 30px; height: 30px; border-radius: 50%;">
             <span>Jessica Salmon</span>
          </div>
        </div>
        <div class="sermon-card">
          <div style="position: relative; border-radius: 12px; overflow: hidden; margin-bottom: 20px;">
             <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=600" alt="Sermon 2">
             <div style="position: absolute; bottom: 15px; left: 15px; display: flex; gap: 10px;">
                <span style="background: #F05A28; padding: 5px 10px; border-radius: 4px; font-size: 12px;">🎵</span>
                <span style="background: #F05A28; padding: 5px 10px; border-radius: 4px; font-size: 12px;">🎥</span>
             </div>
          </div>
          <p style="font-size: 10px; opacity: 0.6;">NOVEMBER 15, 2025</p>
          <h4 style="margin: 10px 0;">The Power of Prayer: Connecting with God Daily</h4>
          <div style="display: flex; align-items: center; gap: 10px; font-size: 12px; margin-top: 15px;">
             <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=100" alt="Speaker" style="width: 30px; height: 30px; border-radius: 50%;">
             <span>Jessica Salmon</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Countdown -->
  <section class="countdown-section">
    <div class="container">
      <p style="text-transform: uppercase; font-size: 14px; font-weight: bold; margin-bottom: 20px;">Don't miss the next service</p>
      <div class="timer">
        <div class="timer-item"><h2 id="days">00</h2><span>Days</span></div>
        <div class="timer-item"><h2 id="hours">00</h2><span>Hrs</span></div>
        <div class="timer-item"><h2 id="mins">00</h2><span>Mins</span></div>
        <div class="timer-item"><h2 id="secs">00</h2><span>Secs</span></div>
      </div>
      <p class="script-text" style="font-size: 32px; margin-top: 30px;">Be the light</p>
      <button class="btn btn-primary" style="margin-top: 20px;">JOIN US THIS SUNDAY</button>
    </div>
  </section>

  <!-- Pastors -->
  <section class="pastors-section container">
    <div class="pastors-sidebar">
      <div class="pastor-badge">LEADING WITH LOVE</div>
      <h2 class="pastors-title">MEET OUR<br><span>PASTORS</span></h2>
      <a href="#" class="pastors-link">MEET FULL TEAM ↗</a>
    </div>
    
    <div class="pastors-grid">
      <div class="pastor-card">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=800" alt="Craig">
        <div class="pastor-info">
          <h4>Craig Groeschel</h4>
          <p>PASTOR</p>
        </div>
      </div>
      <div class="pastor-card">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=800" alt="Jerry">
        <div class="pastor-info">
          <h4>Jerry Hurley</h4>
          <p>SENIOR PRIEST</p>
        </div>
      </div>
      <div class="pastor-card">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=800" alt="Samantha">
        <div class="pastor-info">
          <h4>Samantha Wiley</h4>
          <p>ASSOCIATE PASTOR</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Support Our Mission -->
  <section id="donations" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1767600468103-c0e8983ac2dd?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover; padding: 120px 5%; color: white;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; gap: 80px;">
      <div style="flex: 1;">
         <h2 style="font-size: 60px; line-height: 1;">SUPPORT OUR MISSION</h2>
         <p style="margin: 30px 0; opacity: 0.8;">Your generosity helps us serve our community, support missions, and continue sharing the message of hope. Whether you give once or set up recurring donations, every contribution makes a difference.</p>
         <button class="btn btn-outline">VIEW MORE CAUSES ↗</button>
      </div>
      <div style="flex: 1; background: white; color: black; padding: 50px; border-radius: 12px; max-width: 500px;">
         <h3 style="margin-bottom: 30px;">Support Our Cause</h3>
         <p style="font-size: 14px; color: var(--text-muted); margin-bottom: 30px;">Help our organization by donating today! Your donation goes to making a difference for our cause.</p>
         <div style="background: #F9F5F1; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; font-size: 12px; font-weight: bold; margin-bottom: 15px;">
               <span>0 USD</span>
               <span>0</span>
               <span>1000 USD</span>
            </div>
            <div style="height: 6px; background: #ddd; border-radius: 3px; position: relative;">
               <div style="width: 60%; height: 100%; background: var(--primary); border-radius: 3px;"></div>
            </div>
         </div>
         <button class="btn btn-primary" style="width: 100%;">DONATE NOW</button>
         <p style="text-align: center; font-size: 10px; margin-top: 15px; opacity: 0.6;">🔒 100% Secure Donation</p>
      </div>
    </div>
  </section>

  <!-- Get Involved -->
  <section class="container" style="text-align: center; padding: 100px 0;">
    <h2 style="font-size: 60px;">GET INVOLVED TODAY</h2>
    <p class="script-text">We're here for you!</p>
    <p style="max-width: 600px; margin: 0 auto 60px; opacity: 0.6;">Faith is meant to be lived out in community! Discover ways to connect, serve, and grow with us.</p>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
       <div style="background: #FFFBF5; padding: 40px; border-radius: 12px;">
          <h4 style="margin-bottom: 20px;">Join a Small Group</h4>
          <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&q=80&w=300" alt="Small Group" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px;">
          <p style="font-size: 14px; opacity: 0.7;">Build lasting relationships and grow in faith together.</p>
       </div>
       <div style="background: #FFFBF5; padding: 40px; border-radius: 12px;">
          <h4 style="margin-bottom: 20px;">Volunteer</h4>
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=300" alt="Volunteer" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px;">
          <p style="font-size: 14px; opacity: 0.7;">Use your gifts to serve in areas like worship, hospitality, outreach.</p>
       </div>
       <div style="background: #FFFBF5; padding: 40px; border-radius: 12px;">
          <h4 style="margin-bottom: 20px;">Missions & Outreach</h4>
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=300" alt="Missions" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px;">
          <p style="font-size: 14px; opacity: 0.7;">Help us make a difference locally and globally.</p>
       </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="container" style="padding: 100px 0; display: flex; gap: 80px;">
    <div style="flex: 1;">
      <span class="section-tag">Seek. Learn. Grow.</span>
      <h2 style="font-size: 48px; margin-bottom: 20px;">FREQUENTLY ASKED QUESTIONS</h2>
      <p style="color: var(--text-muted);">CONTACT FOR MORE ↗</p>
    </div>
    <div style="flex: 1;">
       <div style="padding: 20px 0; border-top: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
         <span>What should I expect on my first visit?</span>
         <span>+</span>
       </div>
       <div style="padding: 20px 0; border-top: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
         <span>Do you have programs for kids?</span>
         <span>+</span>
       </div>
       <div style="padding: 20px 0; border-top: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
         <span>How can I get involved?</span>
         <span>+</span>
       </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-grid">
      <div>
        <h3 class="footer-title">FAITH CONNECT</h3>
        <p style="opacity: 0.6; font-size: 14px;">Stay Connected</p>
        <p style="opacity: 0.5; font-size: 12px; margin-top: 10px;">Get updates on events and inspiration.</p>
        <div style="margin-top: 20px; display: flex; gap: 10px;">
          <input type="text" placeholder="Email Address" style="background: rgba(255,255,255,0.1); border: none; padding: 10px; color: white; flex: 1;">
          <button class="btn btn-primary" style="padding: 10px 20px;">SIGN UP</button>
        </div>
      </div>
      <div>
        <h4>Pages</h4>
        <ul style="list-style: none; opacity: 0.7; font-size: 14px; line-height: 2.5; margin-top: 20px;">
          <li>About Us</li>
          <li>Ministries</li>
          <li>Sermons</li>
          <li>Donations</li>
        </ul>
      </div>
      <div>
        <h4>Location</h4>
        <p style="opacity: 0.7; font-size: 14px; margin-top: 20px;">Faith Connect Church<br>704 11th Ave<br>New York, NY 55416</p>
      </div>
      <div>
        <h4>Contact</h4>
        <p style="opacity: 0.7; font-size: 14px; margin-top: 20px;">(000) 321-423-4567<br>example@faithconnect.com</p>
      </div>
    </div>
    <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; display: flex; justify-content: space-between; font-size: 12px; opacity: 0.5;">
      <span>© {{ date('Y') }} Faith Connect. All Rights Reserved</span>
      <span>This is a sample website. Privacy Policy</span>
    </div>
  </footer>

  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
