USE quase_tudo_gostoso;

-- ============================
-- USUÁRIO
-- ============================
INSERT INTO usuario (id, nome, email, dt_nascimento, cep, genero, senha, dt_inscrito, remember_token, created_at, updated_at)
VALUES
(1, 'João Silva', 'joao@example.com', '1990-05-12', 89200000, 1, '123456', NOW(), NULL, NOW(), NOW()),
(2, 'Maria Oliveira', 'maria@example.com', '1995-02-20', 89010000, 2, '123456', NOW(), NULL, NOW(), NOW());

-- ============================
-- CATEGORIA
-- ============================
INSERT INTO categoria (id, categoria, ativo, created_at, updated_at)
VALUES
(1, 'Massas', 1, NOW(), NOW()),
(2, 'Sobremesas', 1, NOW(), NOW()),
(3, 'Salgados', 1, NOW(), NOW());

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
(1, 'Farinha de Trigo', NOW(), NOW()),
(2, 'Ovos', NOW(), NOW()),
(3, 'Leite', NOW(), NOW()),
(4, 'Açúcar', NOW(), NOW()),
(5, 'Chocolate em pó', NOW(), NOW()),
(6, 'Frango', NOW(), NOW()),
(7, 'Arroz', NOW(), NOW());

-- ============================
-- PREPARO
-- ============================
INSERT INTO preparo (id, modo_preparo, tempo_preparo, created_at, updated_at)
VALUES
(1, 'Misture todos os ingredientes e asse por 40 minutos.', '00:40:00', NOW(), NOW()),
(2, 'Cozinhe o frango, adicione molho e finalize no forno.', '00:50:00', NOW(), NOW()),
(3, 'Ferva o leite, adicione chocolate e açúcar, mexa até engrossar.', '00:15:00', NOW(), NOW());

-- ============================
-- COZINHA
-- ============================
INSERT INTO cozinha (id, cozinha, ativo, created_at, updated_at)
VALUES
(1, 'Brasileira', 1, NOW(), NOW()),
(2, 'Italiana', 1, NOW(), NOW()),
(3, 'Caseira', 1, NOW(), NOW());

-- ============================
-- UTENSÍLIO
-- ============================
INSERT INTO utensilio (id, utensilio, created_at, updated_at)
VALUES
(1, 'Panela', NOW(), NOW()),
(2, 'Forno', NOW(), NOW()),
(3, 'Tigela', NOW(), NOW());

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

-- ============================
-- RECEITA
-- ============================
INSERT INTO receita (id, titulo, descricao, usuario_id, preparo_id, dificuldade_id, custo_id, created_at, updated_at)
VALUES
(1, 'Bolo de Chocolate', 'Um bolo simples, fofinho e saboroso.', 1, 1, 1, 1, NOW(), NOW()),
(2, 'Frango Assado Especial', 'Frango suculento com tempero caseiro.', 2, 2, 2, 2, NOW(), NOW()),
(3, 'Chocolate Quente Cremoso', 'Perfeito para dias frios.', 1, 3, 1, 1, NOW(), NOW());

-- ============================
-- RECEITA_CATEGORIA
-- ============================
INSERT INTO receita_categoria (receita_id, categoria_id, created_at, updated_at)
VALUES
(1, 2, NOW(), NOW()),  -- Bolo de Chocolate -> Sobremesas
(2, 3, NOW(), NOW()),  -- Frango Assado -> Salgados
(3, 2, NOW(), NOW());  -- Chocolate Quente -> Sobremesas

-- ============================
-- RECEITA_REFEICAO
-- ============================
INSERT INTO receita_refeicao (receita_id, refeicao_id, created_at, updated_at)
VALUES
(1, 2, NOW(), NOW()), -- bolo -> almoço
(1, 3, NOW(), NOW()), -- bolo -> jantar
(2, 2, NOW(), NOW()), -- frango -> almoço
(3, 1, NOW(), NOW()); -- chocolate quente -> café da manhã

-- ============================
-- INGREDIENTE_RECEITA
-- ============================
INSERT INTO ingrediente_receita (receita_id, ingrediente_id, created_at, updated_at)
VALUES
(1, 1, NOW(), NOW()), -- farinha no bolo
(1, 2, NOW(), NOW()), -- ovos no bolo
(1, 5, NOW(), NOW()), -- chocolate no bolo
(2, 6, NOW(), NOW()), -- frango na receita
(3, 3, NOW(), NOW()), -- leite no choco quente
(3, 5, NOW(), NOW()); -- chocolate no choco quente

-- ============================
-- COZINHA_RECEITA
-- ============================
INSERT INTO cozinha_receita (receita_id, cozinha_id, created_at, updated_at)
VALUES
(1, 3, NOW(), NOW()), -- bolo -> cozinha caseira
(2, 1, NOW(), NOW()), -- frango -> brasileira
(3, 3, NOW(), NOW()); -- chocolate quente -> caseira

-- ============================
-- RECEITA_UTENSÍLIO
-- ============================
INSERT INTO receita_utensilio (receita_id, utensilio_id, created_at, updated_at)
VALUES
(1, 2, NOW(), NOW()), -- forno no bolo
(1, 3, NOW(), NOW()), -- tigela no bolo
(2, 1, NOW(), NOW()), -- panela no frango
(2, 2, NOW(), NOW()), -- forno no frango
(3, 1, NOW(), NOW()); -- panela no chocolate quente
