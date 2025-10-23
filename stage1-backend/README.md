# String Analysis RESTful API

A **RESTful API service** that analyzes strings and computes various properties such as:

- Length  
- Palindrome check  
- Unique characters  
- Word count  
- SHA-256 hash  
- Character frequency  

---

## 🚀 Features

| Endpoint | Method | Description |
|-----------|---------|-------------|
| `/strings` | **POST** | Analyze and store a new string |
| `/strings/{value}` | **GET** | Retrieve analysis for a specific string |
| `/strings` | **GET** | Filter strings with query parameters |
| `/strings/filter-by-natural-language` | **GET** | Filter strings using natural language queries |
| `/strings/{value}` | **DELETE** | Remove a string from storage |

---

## 🧰 Tech Stack

- **Framework:** Laravel/
- **Language:** PHP
- **Architecture:** Minimal APIs    

---

## ⚡ Quick Start

### Local Development

```bash
# Clone the repository
git clone https://github.com/dhami/hng-stage1-backend.git
cd hng-stage1-backend
