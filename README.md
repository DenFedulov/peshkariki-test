# Zoo Simulation Models (PHP Test Task)

## Описание

Реализация моделей зоопарка в рамках тестового задания на позицию backend-разработчика.

Целью было продемонстрировать:
- принципы ООП (наследование, абстракция, полиморфизм),
- продуманную и расширяемую архитектуру,
- аккуратную работу с доменной логикой.

>  Примечание: структура базы данных и система логирования в рамках задания не были определены, поэтому эти аспекты проектировались с расчётом на внешние сервисы (репозитории, логгеры и т.п.), что соответствует принципам разделения ответственности (SRP) и инверсии зависимостей (DIP).

---

## Архитектура

- **Классы животных**: реализованы с учётом биологических классификаций (млекопитающее, птица, рептилия и др.).
- **Атрибуты животных**: пол, кличка, сытость, возраст, состояние (жив/мертв).
- **Поведение животных**: методы для жизненного цикла (`advanceAge`, `decreaseSatiation`, `eat`, `move`, `reproduce`).
- **Репродуктивные особенности**: вынесены в стратегии.
- **Питание**: реализована базовая логика съедобности через утилиту `FoodUtils`.
- **Вольеры**: отдельный класс `Aviary` со всеми необходимыми свойствами (открыт/заперт, крыша, тип пищи и её количество).

---

## Технологии

- PHP 7.x
- PSR-4 (autoload, namespaces)
- Без использования фреймворков
- Заглушки вместо БД и логгера — для демонстрации чистой доменной модели

---
