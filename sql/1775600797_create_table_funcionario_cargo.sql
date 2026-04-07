USE organizagenda;

-- ========================================
-- TABELA: funcionario_cargo (RELACIONAMENTO)
-- ========================================
CREATE TABLE funcionario_cargo (
    id_funcionario INT NOT NULL,
    id_cargo INT NOT NULL,

    PRIMARY KEY (id_funcionario, id_cargo),

    FOREIGN KEY (id_funcionario)
        REFERENCES funcionarios(id_funcionario)
        ON DELETE CASCADE,

    FOREIGN KEY (id_cargo)
        REFERENCES cargos(id_cargo)
        ON DELETE CASCADE
);