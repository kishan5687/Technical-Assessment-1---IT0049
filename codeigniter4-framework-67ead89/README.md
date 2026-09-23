# IT0049 - Web System Technologies
## Technical Formative Assessment 1: From Zero to Four Pages: Your First CodeIgniter Application

### Student Information
* **Student Name:** Raina Quejada
* **Course & Section:** [Insert your Section here, e.g., BSIT - 31A]
* **Professor:** [Insert your Professor's Name here]

---

### Project Description
This repository contains a basic four-page Point-of-Sale (POS) system built using the **CodeIgniter 4 Web Framework** following the Model-View-Controller (MVC) architectural pattern. 

Per the laboratory requirements, this assessment focuses strictly on the Routing, Controller, and View layers. Temporary static PHP arrays are utilized in the controllers as an in-memory data source stand-in before database introduction.

### Application Features & Routes
* **Landing Page (`/`)**: Displays the main application welcome information.
* **About Page (`/about`)**: Contains context regarding the project and framework concepts.
* **Customer Accounts (`/customers`)**: Displays a structured tabular view of customer records mapped from an in-memory static array (featuring sample profile details).
* **User Accounts (`/users`)**: Renders system user/staff account roles retrieved dynamically via loops from a static data source array.

---

### Requirements & Setup Instructions

#### Prerequisites
* XAMPP (with PHP 8.1 or higher)
* Composer installed locally

#### How to Run Locally

1. **Clone or Download the Repository:**
   Extract the files into your local directory.

2. **Configure the Environment:**
   Locate the sample env configuration, rename it to `.env`, and update the parameters to run in development mode:
   ```env
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   ```

3. **Navigate into the Project Root Directory via Terminal:**
   ```bash
   cd "TECHNICAL ASSESSMENT 1/codeigniter4-framework-67ead89"
   ```

4. **Launch the CodeIgniter Development Server:**
   Using your local PHP path configuration:
   ```bash
   C:\xampp\php\php spark serve
   ```

5. **Access via Browser:**
   Open [http://localhost:8080/](http://localhost:8080/) to interact with the application.

---

### Note on Database Submission Requirement
* **Database Export Status:** As explicitly specified in the module guidelines for Formative Assessment 1, this project runs entirely on temporary static PHP arrays to mimic data records. **No live database or SQL export is tied to this phase of development.** Data source connectivity will be introduced in the upcoming module.
