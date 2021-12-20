INSERT INTO Products (id, name, description, category, stock, cost,visibility, image) VALUES
(1, "Toyota Prius Prime", "Sedan","", 1000, 34000,"True", "https://user-images.githubusercontent.com/90267420/144120923-b975fdf4-98c5-46f7-942e-d96a406f66f2.png"),
(2, "Toyota Prius", "Sedan","", 1000, 33760, "True","https://user-images.githubusercontent.com/90267420/144163540-45c03e9f-fd57-4857-b1aa-be93d78cea8a.png"),
(3, "Toyota Corolla", "Sedan","", 1000, 25975, "True","https://user-images.githubusercontent.com/90267420/144163968-0afafeb1-54bc-4703-9ed9-cf89bd25ee2d.png"),
(4, "Toyota Mirai", "Sedan","", 1000, 66425, "True","https://user-images.githubusercontent.com/90267420/144165328-5b735c62-75ca-43df-a5f9-a4bcd2a53e68.png"),
(5, "Toyota Avalon", "Sedan","", 1000, 42575,"True", "https://user-images.githubusercontent.com/90267420/144164956-94b81c62-ee84-4b67-ab02-ece3c199dfe3.png"),
(6, "Toyota Camry", "Sedan","",1000, 35270,"True","https://user-images.githubusercontent.com/90267420/144164809-a763da29-3d73-4324-b7c5-63153101ab7b.png"),
(7, "Toyota GR86", "Sedan","",1000, 30725,"True","https://user-images.githubusercontent.com/90267420/144165387-13418ba2-e237-4a54-8301-42b6962c8d27.png"),
(8, "Toyota GR Supra", "Sedan","",1000, 63280,"True","https://user-images.githubusercontent.com/90267420/144165452-b8d71d7a-466a-4351-9402-e85ad2320364.png"),
(9, "Toyota Sienna", "Van","", 1000,43525,"True","https://user-images.githubusercontent.com/90267420/144165512-b2eee024-e1b3-4361-ba0b-e2c454669ac3.png"),
(10,"Toyota Venza", "SUV","",1000, 40000,"True","https://user-images.githubusercontent.com/90267420/144165585-04ba6529-1f9c-48c4-9fb1-f84dab4999e6.png"),
(11,"Toyota C-HR", "SUV","",1000, 27675,"True","https://user-images.githubusercontent.com/90267420/144165628-416f18d8-aba1-4a9f-969d-c6bd29112422.png"),
(12,"Toyota RAV4", "SUV","",1000, 34880,"True","https://user-images.githubusercontent.com/90267420/144165684-71e6aa82-ed48-4427-a4af-593562784725.png"),
(13,"Toyota Highlander", "SUV","",1000, 49935,"True","https://user-images.githubusercontent.com/90267420/144165738-1448662e-d68c-4568-a417-74ff68d5c1d6.png"),
(14,"Toyota 4Runner", "SUV","",1000, 44080,"True","https://user-images.githubusercontent.com/90267420/144165800-e732aa0a-811d-4ecf-87e4-7b4c71a0848a.png"),
(15,"Toyota Sequoia", "SUV","",1000, 59520,"False","https://user-images.githubusercontent.com/90267420/144165843-b8083505-63fc-467a-81bd-a08bb36c7d1f.png")
ON DUPLICATE KEY UPDATE modified = CURRENT_TIMESTAMP()
