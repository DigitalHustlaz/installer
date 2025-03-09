# Remotely Clone Project

This project is a cloned version of **Remotely**, an open-source remote desktop and remote support application. It is designed for efficient, secure, and easy-to-use remote desktop management.

## Features

- **Secure Remote Access:** Establish secure connections using end-to-end encryption.
- **Cross-Platform Support:** Compatible with Windows, macOS, and Linux.
- **Session Management:** Efficiently manage multiple remote desktop sessions.
- **User Authentication:** Integrated security protocols ensure secure user access.
- **Fast and Lightweight:** Optimized for minimal resource consumption.

## Installation

### Prerequisites

- .NET Core 3.1 or later
- ASP.NET Core
- SQL Server or SQLite (for database management)
- A web server (e.g., IIS, Apache, Nginx)

### Steps

1. **Clone the Repository**

   ```bash
   git clone <repository-url>
   cd remotely-clone
   ```

2. **Install Dependencies**

   ```bash
   dotnet restore
   ```

3. **Database Configuration**

   - Update the `appsettings.json` file with your database connection string.

4. **Build the Project**

   ```bash
   dotnet build
   ```

5. **Run the Project**

   ```bash
   dotnet run
   ```

6. **Access the Application**

   - Navigate to `http://localhost:5000` in your browser.

## Configuration

### Environment Variables

| Variable         | Description                        |
| ---------------- | ---------------------------------- |
| `DB_CONNECTION`  | Connection string for the database |
| `APP_PORT`       | Port for running the application   |
| `ENCRYPTION_KEY` | Key for encrypting remote sessions |

### App Settings

Modify `appsettings.json` for additional settings such as session timeout, logging, etc.

## Usage

1. **Create an Account:** Register your account to start managing remote sessions.
2. **Add Devices:** Install the client software on the devices you want to manage.
3. **prompt in raw source code file**
4.
5. Submit a pull request for review.

## License

This project is licensed under the **MIT License**.

## Contact

For questions or support, feel free to reach out to **Pasha Zahari** at [pashaz@digitalhustlaz.com](mailto\:pashaz@digitalhustlaz.com).

