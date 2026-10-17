AI-Based Facial Identity Verification and Anti-Impersonation System

Section A: General Information

1. Project Metadata

Project Title: AI-Based Facial Identity Verification and Anti-Impersonation System

2. Proponents / Team Members

* Reymalyn Canasa — Team Leader
* Ayesha Facundo — Member
* Jemark De Dios — Member
* Kobey Badayos — Member
* Symon Galo Delarosa — Member

SECTION A: GENERAL INFORMATION

3. Target User / Client

Target Users: Students, educational institutions, and organizations that require a reliable method of verifying user identities and reducing the risk of online impersonation.

Client / Stakeholder (if applicable): Educational institutions or organizations that require a secure, efficient, and organized identity verification process.

SECTION B: PROJECT DETAILS

1. Problem Statement

As more people rely on digital platforms and online services, ensuring that individuals are who they claim to be has become increasingly important. Traditional authentication methods, such as usernames, passwords, and PINs, may not be sufficient when login credentials are stolen, shared, or accessed by unauthorized individuals. These situations can lead to unauthorized account access, identity misuse, and online impersonation. Furthermore, manually verifying identities can be time-consuming and may result in inconsistent verification procedures and records.

To address these concerns, this project proposes the development of a web-based AI-Based Facial Identity Verification and Anti-Impersonation System. The system will provide a platform where users can register their accounts, submit facial images for verification, and monitor their verification status. It will also provide administrators with tools to manage user accounts, review verification requests, and maintain verification records. The project aims to make the identity verification process more organized, efficient, and reliable while ensuring the responsible handling of sensitive biometric information.

2. Proposed Solution

The proposed system is a web-based application designed to support identity verification through facial image comparison and user account management. Users will be able to register, log in, manage their profiles, register a reference facial image, and submit facial images for verification. The system will compare each submitted image with the user’s registered reference image using an integrated facial verification model or service. The resulting verification status will be recorded and displayed to the user.

An administrator dashboard will allow authorized personnel to manage user accounts, review verification requests, monitor verification activities, and maintain system records. The application will be developed using Laravel for backend processing, MySQL or MariaDB for database management, and Bootstrap 5 for a responsive and user-friendly interface. Through these features, the system aims to improve the identity verification process and help identify potential impersonation attempts.

3. System Scope & Key Modules

A. User-Facing / Frontend Modules

* User Authentication: Provides user registration, login, logout, profile management, and password reset functionality.
* Module 1 – Facial Image Registration and Profile Management: Allows users to manage their personal information and upload or capture a reference facial image for future identity verification. The registered image will serve as the reference for subsequent verification requests.
* Module 2 – Facial Identity Verification and Anti-Impersonation: Allows users to submit a facial image for comparison with their registered reference image using an integrated facial verification model or service. The system displays the verification result and records the status of each verification request to help identify potential impersonation attempts.

B. Admin / Content Management System (CMS) Modules

* Admin Dashboard: Provides an overview of registered users, pending verification requests, key statistics, and recent system activities.
* Content & Entry Management: Enables authorized administrators to create, view, update, and delete user records, facial profile references, and verification requests according to their assigned permissions.
* User & Role Management: Allows administrators to manage user accounts, assign roles, control access permissions, and update account statuses.

SECTION C: TECH STACK & CONFIGURATION

Component	Technology / Version	Implementation Details
Backend Framework	Laravel (PHP 8.2+)	Handles application logic, routing, authentication, middleware, and identity verification request processing.
Frontend UI Framework	Bootstrap 5	Provides responsive layouts, forms, navigation, verification pages, and dashboard components.
Database Engine	MySQL / MariaDB	Stores user accounts, facial profile references, verification requests, and verification records.
Database ORM	Laravel Eloquent ORM	Manages database operations, CRUD functionality, and relationships between system tables.
Version Control	Git & GitHub / GitLab	Tracks source code changes, maintains commit history, supports branch management, and enables team collaboration.
AI Facial Verification	Compatible facial verification model or service	Compares submitted facial images with registered reference images and provides verification  results for the application to record


