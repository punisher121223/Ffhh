# اطلاعات کاربر
login = "punisher121223"
current_date_time = "2025-02-24 06:44:22"

# محتوای فایل README
readme_content = f"""
# اطلاعات کاربر

- **تاریخ و زمان فعلی (UTC):** {current_date_time}
- **نام کاربری:** {login}
"""

# نوشتن اطلاعات به فایل README.md
with open("README.md", "w", encoding="utf-8") as file:
    file.write(readme_content)

print("فایل README.md با موفقیت ایجاد شد.")
