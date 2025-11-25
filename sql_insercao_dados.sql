USE quase_tudo_gostoso;

-- ============================
-- CATEGORIA
-- ============================
INSERT INTO categoria (id, categoria, ativo, created_at, updated_at)
VALUES
(4, 'Carnes', 1, NOW(), NOW()),
(5, 'Bebidas', 1, NOW(), NOW()),
(6, 'Saladas', 1, NOW(), NOW()),
(7, 'Molhos', 1, NOW(), NOW()),
(8, 'Aperitivos', 1, NOW(), NOW()),
(9, 'Café da Manhã', 1, NOW(), NOW()),
(10, 'Lanches', 1, NOW(), NOW()),
(11, 'Veganas', 1, NOW(), NOW()),
(12, 'Vegetarianas', 1, NOW(), NOW()),
(13, 'Mariscos', 1, NOW(), NOW()),
(14, 'Sopas', 1, NOW(), NOW()),
(15, 'Pratos Rápidos', 1, NOW(), NOW()),
(16, 'Saudável', 1, NOW(), NOW()),
(17, 'Low Carb', 1, NOW(), NOW()),
(18, 'Fitness', 1, NOW(), NOW()),
(19, 'Doces', 1, NOW(), NOW()),
(20, 'Tortas', 1, NOW(), NOW());

-- ============================
-- REFEIÇÃO
-- ============================
INSERT INTO refeicao (id, refeicao, ativo, created_at, updated_at)
VALUES
(1, 'Café da Manhã', 1, NOW(), NOW()),
(2, 'Almoço', 1, NOW(), NOW()),
(3, 'Jantar', 1, NOW(), NOW());

-- ============================
-- INGREDIENTE
-- ============================
INSERT INTO ingrediente (id, ingrediente, created_at, updated_at)
VALUES
(8, 'Manteiga', NOW(), NOW()),
(9, 'Fermento em pó', NOW(), NOW()),
(10, 'Sal', NOW(), NOW()),
(11, 'Tomate', NOW(), NOW()),
(12, 'Cebola', NOW(), NOW()),
(13, 'Alho', NOW(), NOW()),
(14, 'Azeite de Oliva', NOW(), NOW()),
(15, 'Batata', NOW(), NOW()),
(16, 'Carne Moída', NOW(), NOW()),
(17, 'Peito de Frango', NOW(), NOW()),
(18, 'Queijo Mussarela', NOW(), NOW()),
(19, 'Presunto', NOW(), NOW()),
(20, 'Macarrão', NOW(), NOW()),
(21, 'Molho de Tomate', NOW(), NOW()),
(22, 'Creme de Leite', NOW(), NOW()),
(23, 'Margarina', NOW(), NOW()),
(24, 'Cenoura', NOW(), NOW()),
(25, 'Ervilha', NOW(), NOW()),
(26, 'Milho', NOW(), NOW()),
(27, 'Feijão', NOW(), NOW()),
(28, 'Pão', NOW(), NOW()),
(29, 'Banana', NOW(), NOW()),
(30, 'Laranja', NOW(), NOW()),
(31, 'Salsinha', NOW(), NOW()),
(32, 'Cebolinha', NOW(), NOW()),
(33, 'Orégano', NOW(), NOW()),
(34, 'Pimenta-do-reino', NOW(), NOW()),
(35, 'Canela em pó', NOW(), NOW()),
(36, 'Mel', NOW(), NOW()),
(37, 'Açúcar Mascavo', NOW(), NOW()),
(38, 'Coco Ralado', NOW(), NOW()),
(39, 'Leite Condensado', NOW(), NOW()),
(40, 'Gelatina Incolor', NOW(), NOW());

-- ============================
-- COZINHA
-- ============================
INSERT INTO cozinha (id, cozinha, ativo, created_at, updated_at)
VALUES
(1, 'Brasileira', 1, NOW(), NOW()),
(2, 'Italiana', 1, NOW(), NOW()),
(3, 'Caseira', 1, NOW(), NOW()),
(4, 'Japonesa', 1, NOW(), NOW()),
(5, 'Chinesa', 1, NOW(), NOW()),
(6, 'Mexicana', 1, NOW(), NOW()),
(7, 'Árabe', 1, NOW(), NOW()),
(8, 'Indiana', 1, NOW(), NOW()),
(9, 'Francesa', 1, NOW(), NOW()),
(10, 'Mediterrânea', 1, NOW(), NOW()),
(11, 'Vegana', 1, NOW(), NOW()),
(12, 'Vegetariana', 1, NOW(), NOW()),
(13, 'Coreana', 1, NOW(), NOW()),
(14, 'Tailandesa', 1, NOW(), NOW()),
(15, 'Espanhola', 1, NOW(), NOW()),
(16, 'Grega', 1, NOW(), NOW()),
(17, 'Africana', 1, NOW(), NOW()),
(18, 'Americana', 1, NOW(), NOW()),
(19, 'Portuguesa', 1, NOW(), NOW()),
(20, 'Peruana', 1, NOW(), NOW());

-- ============================
-- UTENSÍLIO
-- ============================
INSERT INTO utensilio (id, utensilio, created_at, updated_at)
VALUES
(1, 'Panela', NOW(), NOW()),
(2, 'Forno', NOW(), NOW()),
(3, 'Tigela', NOW(), NOW()),
(4, 'Frigideira', NOW(), NOW()),
(5, 'Liquidificador', NOW(), NOW()),
(6, 'Batedeira', NOW(), NOW()),
(7, 'Colher de Pau', NOW(), NOW()),
(8, 'Faca Chef', NOW(), NOW()),
(9, 'Ralador', NOW(), NOW()),
(10, 'Assadeira', NOW(), NOW()),
(11, 'Panela de Pressão', NOW(), NOW()),
(12, 'Tabua de Corte', NOW(), NOW()),
(13, 'Escorredor de Macarrão', NOW(), NOW()),
(14, 'Espátula', NOW(), NOW()),
(15, 'Peneira', NOW(), NOW()),
(16, 'Micro-ondas', NOW(), NOW()),
(17, 'Chaleira', NOW(), NOW()),
(18, 'Forma de Bolo', NOW(), NOW()),
(19, 'Copo Medidor', NOW(), NOW()),
(20, 'Pegador de Massa', NOW(), NOW()),
(21, 'Moedor de Alho', NOW(), NOW()),
(22, 'Tábua de Carne', NOW(), NOW()),
(23, 'Descascador de Legumes', NOW(), NOW()),
(24, 'Concha', NOW(), NOW()),
(25, 'Leiteira', NOW(), NOW()),
(26, 'Wok', NOW(), NOW()),
(27, 'Termômetro Culinário', NOW(), NOW()),
(28, 'Mixer', NOW(), NOW()),
(29, 'Saco de Confeitar', NOW(), NOW()),
(30, 'Forma para Pizza', NOW(), NOW());

-- ============================
-- DIFICULDADE
-- ============================
INSERT INTO dificuldade (id, dificuldade, created_at, updated_at)
VALUES
(1, 'Fácil', NOW(), NOW()),
(2, 'Médio', NOW(), NOW()),
(3, 'Difícil', NOW(), NOW());

-- ============================
-- CUSTO
-- ============================
INSERT INTO custo (id, custo, created_at, updated_at)
VALUES
(1, 'Baixo', NOW(), NOW()),
(2, 'Médio', NOW(), NOW()),
(3, 'Alto', NOW(), NOW());