 <div class="fs-spon-container">
     <div class="fs-spon-content container">
         <!-- Left Section -->
         <div class="fs-spon-left">
             <span class="fs-spon-label">SPONSORSHIP OPPORTUNITIES</span>
             <h1 class="fs-spon-title">
                 BECOME A <span class="fs-spon-highlight">SPONSOR</span>
             </h1>
             <p class="fs-spon-description">
                 Join leading brands at Finsphere Expo Kuwait 2026
             </p>

             <div class="fs-spon-benefits">
                 <div class="fs-spon-benefit">
                     <div class="fs-spon-benefit-check">✓</div>
                     <span>Premium brand visibility</span>
                 </div>
                 <div class="fs-spon-benefit">
                     <div class="fs-spon-benefit-check">✓</div>
                     <span>Direct access to decision makers</span>
                 </div>
                 <div class="fs-spon-benefit">
                     <div class="fs-spon-benefit-check">✓</div>
                     <span>Exclusive networking opportunities</span>
                 </div>
                 <div class="fs-spon-benefit">
                     <div class="fs-spon-benefit-check">✓</div>
                     <span>Custom sponsorship packages</span>
                 </div>
             </div>
         </div>

         <!-- Right Section - Form Card -->
         <div class="fs-spon-right">
             <div class="fs-spon-card">
                 <span class="fs-spon-card-label">PARTNER WITH US</span>
                 <h2 class="fs-spon-card-title">
                     REQUEST YOUR <span class="fs-spon-card-highlight">SPONSORSHIP PACKAGE</span>
                 </h2>
                 <p class="fs-spon-card-subtitle">
                     Get detailed information about our sponsorship opportunities
                 </p>

                 <form class="fs-spon-form">
                     <div class="fs-spon-form-group">
                         <input type="text" placeholder="Full Name" class="fs-spon-input" required>
                     </div>

                     <div class="fs-spon-form-row">
                         <div class="fs-spon-form-group">
                             <input type="tel" placeholder="Phone Number" class="fs-spon-input" required>
                         </div>
                         <div class="fs-spon-form-group">
                             <input type="email" placeholder="Email Address" class="fs-spon-input" required>
                         </div>
                     </div>

                     <div class="fs-spon-form-row">
                         <div class="fs-spon-form-group">
                             <input type="text" placeholder="Company Name" class="fs-spon-input" required>
                         </div>
                         <div class="fs-spon-form-group">
                             <select class="fs-spon-select" name="" id="">
                                 <option value="">Select Sponsorship Type</option>
                                 <option value="">Official</option>
                                 <option value="">Exclusive</option>
                                 <option value="">Diamond</option>
                                 <option value="">Platinum</option>
                                 <option value="">Elite</option>
                                 <option value="">Title</option>
                                 <option value="">Regional</option>
                                 <option value="">Gold</option>
                                 <option value="">Silver</option>
                                 <option value="">Standard</option>
                             </select>
                         </div>

                     </div>


                     <div class="fs-spon-form-group">
                         <textarea placeholder="Tell us about your sponsorship interests..." class="fs-spon-textarea" rows="4"></textarea>
                     </div>

                     <button type="submit" class="fs-spon-btn">
                         GET SPONSORSHIP PACKAGES
                     </button>

                     <p class="fs-spon-privacy">
                         We respect your privacy. Your information is safe with us.
                     </p>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <style>
     .fs-spon-container {
         width: 100%;
         min-height: 100vh;
         background: linear-gradient(333.56deg, rgba(35, 3, 60, 0.7) -57.5%, rgba(151, 103, 55, 0.3) 87.13%),
             url('assets/frontend/img/resources/expo.jpg');
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 80px 20px;
     }


     .fs-spon-content {
         max-width: 1400px;
         width: 100%;
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 60px;
         align-items: center;
     }

     /* Left Section */
     .fs-spon-left {
         color: white;
         max-width: 600px;
     }

     .fs-spon-label {
         display: inline-block;
         color: #f3d8b8;
         font-size: 14px;
         font-weight: 600;
         letter-spacing: 2px;
         margin-bottom: 16px;
         text-transform: uppercase;
     }

     .fs-spon-title {
         font-size: 56px;
         font-weight: 800;
         line-height: 1.1;
         margin-bottom: 16px;
         text-transform: uppercase;
         color: white !important;
     }

     .fs-spon-highlight {
         color: #f3d8b8;
         display: block;
     }

     .fs-spon-description {
         font-size: 20px;
         color: rgba(255, 255, 255, 0.9);
         margin-bottom: 40px;
         font-weight: 400;
         line-height: 1.5;
     }

     /* Benefits Section */
     .fs-spon-benefits {
         display: flex;
         flex-direction: column;
         gap: 16px;
     }

     .fs-spon-benefit {
         display: flex;
         align-items: center;
         gap: 12px;
         font-size: 18px;
         color: white;
         line-height: 1.5;
     }

     .fs-spon-benefit-check {
         width: 32px;
         height: 32px;
         background: rgba(255, 255, 255, 0.2);
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 18px;
         flex-shrink: 0;
     }

     /* Right Section */
     .fs-spon-right {
         display: flex;
         justify-content: center;
     }

     .fs-spon-card {
         background: white;
         border-radius: 24px;
         padding: 48px;
         box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
         max-width: 600px;
         width: 100%;
     }

     .fs-spon-card-label {
         display: inline-block;
         color: #976737;
         font-size: 12px;
         font-weight: 700;
         letter-spacing: 2px;
         margin-bottom: 12px;
         text-transform: uppercase;
     }

     .fs-spon-card-title {
         font-size: 36px;
         font-weight: 800;
         line-height: 1.2;
         margin-bottom: 12px;
         color: #2d2d2d;
     }

     .fs-spon-card-highlight {
         color: #976737;
     }

     .fs-spon-card-subtitle {
         font-size: 16px;
         color: #666;
         margin-bottom: 32px;
         line-height: 1.5;
     }

     /* Form Styles */
     .fs-spon-form {
         display: flex;
         flex-direction: column;
         gap: 20px;
     }

     .fs-spon-form-group {
         display: flex;
         flex-direction: column;
     }

     .fs-spon-form-row {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 16px;
     }

     .fs-spon-select {
         width: 100%;
         padding: 10px;
         border: 2px solid #e5e5e5;
         border-radius: 5px;
         font-size: 15px;
         color: #2d2d2d;
         transition: all 0.3s ease;
         background: #fafafa;
         font-family: inherit;
     }

     .fs-spon-input,
     .fs-spon-textarea {
         width: 100%;
         padding: 16px;
         border: 2px solid #e5e5e5;
         border-radius: 12px;
         font-size: 15px;
         color: #2d2d2d;
         transition: all 0.3s ease;
         background: #fafafa;
         font-family: inherit;
     }

     .fs-spon-textarea {
         resize: vertical;
         min-height: 120px;
         font-family: inherit;
     }

     .fs-spon-input:focus,
     .fs-spon-textarea:focus {
         outline: none;
         border-color: #976737;
         background: white;
         box-shadow: 0 0 0 4px rgba(151, 103, 55, 0.1);
     }

     .fs-spon-input::placeholder,
     .fs-spon-textarea::placeholder {
         color: #999;
     }

     /* Button */
     .fs-spon-btn {
         width: 100%;
         padding: 18px 32px;
         background: #976737;
         color: white;
         border: none;
         border-radius: 12px;
         font-size: 16px;
         font-weight: 700;
         letter-spacing: 1px;
         cursor: pointer;
         transition: all 0.3s ease;
         text-transform: uppercase;
         margin-top: 8px;
     }

     .fs-spon-btn:hover {
         background: #76552a;
         transform: translateY(-2px);
         box-shadow: 0 8px 24px rgba(151, 103, 55, 0.3);
     }

     .fs-spon-btn:active {
         transform: translateY(0);
     }

     .fs-spon-privacy {
         text-align: center;
         font-size: 13px;
         color: #999;
         margin-top: 8px;
         line-height: 1.5;
     }

     /* Responsive Design */
     @media (max-width: 1024px) {
         .fs-spon-content {
             grid-template-columns: 1fr;
             gap: 40px;
         }

         .fs-spon-left {
             text-align: center;
             max-width: 100%;
         }

         .fs-spon-benefits {
             align-items: center;
         }

         .fs-spon-title {
             font-size: 48px;
         }
     }

     @media (max-width: 768px) {
         .fs-spon-container {
             padding: 40px 16px;
         }

         .fs-spon-title {
             font-size: 36px;
         }

         .fs-spon-card {
             padding: 32px 24px;
         }

         .fs-spon-card-title {
             font-size: 28px;
         }

         .fs-spon-form-row {
             grid-template-columns: 1fr;
         }

         .fs-spon-benefit {
             font-size: 16px;
         }
     }

     @media (max-width: 480px) {
         .fs-spon-container {
             padding: 32px 12px;
         }

         .fs-spon-title {
             font-size: 28px;
         }

         .fs-spon-description {
             font-size: 16px;
         }

         .fs-spon-card {
             padding: 24px 16px;
         }

         .fs-spon-card-title {
             font-size: 22px;
         }

         .fs-spon-input,
         .fs-spon-textarea {
             font-size: 16px;
         }
     }
 </style>
