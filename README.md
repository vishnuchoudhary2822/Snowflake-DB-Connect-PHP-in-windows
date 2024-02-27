# To build the Snowflake PDO driver for PHP using XAMPP on Windows 11, follow these steps:

1. **Install Microsoft Visual Studio 2019 (VS16) with C++ Development Option:**
   - Ensure that you include the C++ development option during installation.

2. **Download and Install PHP:**
   - Download the PHP version binaries from https://windows.php.net/downloads/releases/.
   - Extract the downloaded file to the `php` directory in your XAMPP installation (e.g., `C:\xampp\php`).

3. **Clone the pdo_snowflake Repository:**
   - Open a command prompt and run the following commands:
     ```bash
     git clone https://github.com/snowflakedb/pdo_snowflake.git
     cd pdo_snowflake
     ```

4. **Run the Script to Download the PHP SDK:**
   - Run the following command, replacing `<arch>`, `<build>`, `<visual studio version>`, and `<path to PHP SDK>` with your values:
     ```bash
     .\scripts\setup_php_sdk.bat x64 Release VS16 C:\xampp\php-sdk
     ```

5. **Download and Build the PHP Source Code:**
   - Run the following command, replacing `<arch>`, `<build>`, `<visual studio version>`, `<full PHP version>`, and `<path to PHP SDK>` with your values:
     ```bash
     .\scripts\run_setup_php.bat x64 Release VS16 8.1.18 C:\xampp\php-sdk
     ```

6. **Build the Driver:**
   - Run the following command, replacing `<arch>`, `<build>`, `<visual studio version>`, `<full PHP version>`, and `<path to PHP SDK>` with your values:
     ```bash
     .\scripts\run_build_pdo_snowflake.bat x64 Release VS16 8.1.18 C:\xampp\php-sdk
     ```

7. **Copy the Driver File:**
   - Copy `php_pdo_snowflake.dll` from the directory where you built the driver to the PHP extension directory in your XAMPP installation (e.g., `C:\xampp\php\ext`).

8. **Configure PHP to Use the Driver:**
   - Edit your `php.ini` file (located in `C:\xampp\php\php.ini`) and add the following line:
     ```
     extension=php_pdo_snowflake.dll
     ```

9. **Restart Apache:**
   - Restart the Apache server in XAMPP to apply the changes.

10. **Verify the Driver:**
    - Run the following command in a command prompt to verify that the driver is loaded successfully:
      ```
      C:\xampp\php\php.exe -dextension=php_pdo_snowflake.dll -m
      ```

## Usage

```
git clone https://github.com/snowflakedb/pdo_snowflake.git
cd pdo_snowflake


C:\Users\Administrator\Downloads\pdo_snowflake-2.0.2\pdo_snowflake-2.0.2\scripts\setup_php_sdk.bat x64 Release VS16 C:\xampp\php-sdk

C:\Users\Administrator\Downloads\pdo_snowflake-2.0.2\pdo_snowflake-2.0.2\scripts\run_setup_php.bat x64 Release VS16  8.2.12 C:\xampp\php-sdk

C:\Users\Administrator\Downloads\pdo_snowflake-2.0.2\pdo_snowflake-2.0.2\scripts\run_build_pdo_snowflake.bat x64 Release VS16  8.2.12 C:\xampp\php-sdk

extension=pdo_snowflake

C:\xampp\php\php.exe -dextension=ext\php_pdo_snowflake.dll -m

```


