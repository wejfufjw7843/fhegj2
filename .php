<?php
def print_name(first_name, last_name):
    """Выводит имя и фамилию пользователя на экран."""
    print(f"Имя: {first_name}")
    print(f"Фамилия: {last_name}")


# Проверяем работу функции, передавая значения в разном порядке
print_name(first_name="John", last_name="Doe")
print_name(last_name="Smith", first_name="Jane")
?>