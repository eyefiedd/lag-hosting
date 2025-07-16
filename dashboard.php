<?php include 'modules/main/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo $site_title; ?></title>
    <meta name="description" content="Painel de controle da Lag Hosting">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    <div class="dashboard-container">
        <aside class="dashboard-sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="8" fill="#3b82f6"/>
                        <path d="M12 10L20 16L12 22V10Z" fill="white"/>
                    </svg>
                    <span>Lag Hosting</span>
                </div>
                <button class="sidebar-toggle" id="sidebar-toggle">
                    <span></span>
                    <span></span>
                </button>
            </div>
            
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li class="nav-item active">
                        <a href="#overview" class="nav-link" data-section="overview">
                            <span class="nav-icon dashboard-icon"></span>
                            <span class="nav-text">Visão Geral</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#servers" class="nav-link" data-section="servers">
                            <span class="nav-icon servers-icon"></span>
                            <span class="nav-text">Meus Servidores</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#billing" class="nav-link" data-section="billing">
                            <span class="nav-icon billing-icon"></span>
                            <span class="nav-text">Faturamento</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#support" class="nav-link" data-section="support">
                            <span class="nav-icon support-icon"></span>
                            <span class="nav-text">Suporte</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings" class="nav-link" data-section="settings">
                            <span class="nav-icon settings-icon"></span>
                            <span class="nav-text">Configurações</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="sidebar-footer">
                <div class="user-info">
                    <div class="user-avatar">
                        <img src="/placeholder.svg?height=40&width=40" alt="User Avatar">
                    </div>
                    <div class="user-details">
                        <span class="user-name">João Silva</span>
                        <span class="user-role">Cliente</span>
                    </div>
                </div>
                <a href="logout.php" class="btn-logout">Sair</a>
            </div>
        </aside>
        
        <main class="dashboard-main">
            <header class="dashboard-header">
                <div class="header-search">
                    <input type="text" placeholder="Pesquisar..." class="search-input">
                    <button class="search-btn"></button>
                </div>
                
                <div class="header-actions">
                    <button class="btn-notification">
                        <span class="notification-icon"></span>
                        <span class="notification-badge">3</span>
                    </button>
                    <button class="btn-help">
                        <span class="help-icon"></span>
                    </button>
                </div>
            </header>
            
            <div class="dashboard-content">
                <!-- Overview Section -->
                <section class="dashboard-section active" id="overview">
                    <div class="section-header">
                        <h1>Visão Geral</h1>
                        <p>Bem-vindo de volta, João!</p>
                    </div>
                    
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon servers-icon"></div>
                            <div class="stat-info">
                                <span class="stat-value">3</span>
                                <span class="stat-label">Servidores Ativos</span>
                            </div>
                            <div class="stat-chart">
                                <div class="chart-bar" style="height: 80%;"></div>
                                <div class="chart-bar" style="height: 60%;"></div>
                                <div class="chart-bar" style="height: 90%;"></div>
                                <div class="chart-bar" style="height: 70%;"></div>
                                <div class="chart-bar" style="height: 85%;"></div>
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-icon uptime-icon"></div>
                            <div class="stat-info">
                                <span class="stat-value">99.9%</span>
                                <span class="stat-label">Uptime</span>
                            </div>
                            <div class="stat-chart">
                                <div class="chart-line">
                                    <svg viewBox="0 0 100 30" preserveAspectRatio="none">
                                        <path d="M0,15 Q20,5 40,15 T80,15 T100,15" stroke="#3b82f6" stroke-width="2" fill="none" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-icon billing-icon"></div>
                            <div class="stat-info">
                                <span class="stat-value">R$79,97</span>
                                <span class="stat-label">Próxima Fatura</span>
                            </div>
                            <div class="stat-date">Vence em 15/06/2023</div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-icon ticket-icon"></div>
                            <div class="stat-info">
                                <span class="stat-value">1</span>
                                <span class="stat-label">Ticket Aberto</span>
                            </div>
                            <a href="#support" class="stat-action">Ver Ticket</a>
                        </div>
                    </div>
                    
                    <div class="dashboard-row">
                        <div class="dashboard-card server-status">
                            <div class="card-header">
                                <h2>Status dos Servidores</h2>
                                <button class="btn-refresh">Atualizar</button>
                            </div>
                            <div class="card-body">
                                <div class="server-list">
                                    <div class="server-item">
                                        <div class="server-info">
                                            <span class="server-name">RP Brasil</span>
                                            <span class="server-type">SAMP</span>
                                        </div>
                                        <div class="server-metrics">
                                            <div class="metric">
                                                <span class="metric-label">CPU</span>
                                                <div class="progress-bar">
                                                    <div class="progress" style="width: 45%;"></div>
                                                </div>
                                                <span class="metric-value">45%</span>
                                            </div>
                                            <div class="metric">
                                                <span class="metric-label">RAM</span>
                                                <div class="progress-bar">
                                                    <div class="progress" style="width: 60%;"></div>
                                                </div>
                                                <span class="metric-value">60%</span>
                                            </div>
                                        </div>
                                        <div class="server-status-badge online">Online</div>
                                        <button class="btn-server-action">Gerenciar</button>
                                    </div>
                                    
                                    <div class="server-item">
                                        <div class="server-info">
                                            <span class="server-name">Cidade Nova</span>
                                            <span class="server-type">Open-MP</span>
                                        </div>
                                        <div class="server-metrics">
                                            <div class="metric">
                                                <span class="metric-label">CPU</span>
                                                <div class="progress-bar">
                                                    <div class="progress" style="width: 30%;"></div>
                                                </div>
                                                <span class="metric-value">30%</span>
                                            </div>
                                            <div class="metric">
                                                <span class="metric-label">RAM</span>
                                                <div class="progress-bar">
                                                    <div class="progress" style="width: 40%;"></div>
                                                </div>
                                                <span class="metric-value">40%</span>
                                            </div>
                                        </div>
                                        <div class="server-status-badge online">Online</div>
                                        <button class="btn-server-action">Gerenciar</button>
                                    </div>
                                    
                                    <div class="server-item">
                                        <div class="server-info">
                                            <span class="server-name">joaosilva.com.br</span>
                                            <span class="server-type">Web</span>
                                        </div>
                                        <div class="server-metrics">
                                            <div class="metric">
                                                <span class="metric-label">CPU</span>
                                                <div class="progress-bar">
                                                    <div class="progress" style="width: 20%;"></div>
                                                </div>
                                                <span class="metric-value">20%</span>
                                            </div>
                                            <div class="metric">
                                                <span class="metric-label">Espaço</span>
                                                <div class="progress-bar">
                                                    <div class="progress" style="width: 35%;"></div>
                                                </div>
                                                <span class="metric-value">35%</span>
                                            </div>
                                        </div>
                                        <div class="server-status-badge online">Online</div>
                                        <button class="btn-server-action">Gerenciar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dashboard-card quick-actions">
                            <div class="card-header">
                                <h2>Ações Rápidas</h2>
                            </div>
                            <div class="card-body">
                                <div class="actions-grid">
                                    <button class="action-btn">
                                        <span class="action-icon add-server"></span>
                                        <span class="action-text">Novo Servidor</span>
                                    </button>
                                    <button class="action-btn">
                                        <span class="action-icon renew"></span>
                                        <span class="action-text">Renovar Serviços</span>
                                    </button>
                                    <button class="action-btn">
                                        <span class="action-icon ticket"></span>
                                        <span class="action-text">Abrir Ticket</span>
                                    </button>
                                    <button class="action-btn">
                                        <span class="action-icon backup"></span>
                                        <span class="action-text">Backup</span>
                                    </button>
                                    <button class="action-btn">
                                        <span class="action-icon domain"></span>
                                        <span class="action-text">Domínios</span>
                                    </button>
                                    <button class="action-btn">
                                        <span class="action-icon invoice"></span>
                                        <span class="action-text">Faturas</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-row">
                        <div class="dashboard-card activity-log">
                            <div class="card-header">
                                <h2>Atividades Recentes</h2>
                                <a href="#" class="card-link">Ver Todas</a>
                            </div>
                            <div class="card-body">
                                <div class="activity-list">
                                    <div class="activity-item">
                                        <div class="activity-icon login"></div>
                                        <div class="activity-details">
                                            <span class="activity-text">Login realizado com sucesso</span>
                                            <span class="activity-time">Hoje, 14:32</span>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon server"></div>
                                        <div class="activity-details">
                                            <span class="activity-text">Servidor "RP Brasil" reiniciado</span>
                                            <span class="activity-time">Hoje, 10:15</span>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon payment"></div>
                                        <div class="activity-details">
                                            <span class="activity-text">Pagamento de R$29,99 recebido</span>
                                            <span class="activity-time">Ontem, 18:45</span>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon ticket"></div>
                                        <div class="activity-details">
                                            <span class="activity-text">Ticket #1234 respondido</span>
                                            <span class="activity-time">Ontem, 15:20</span>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <div class="activity-icon backup"></div>
                                        <div class="activity-details">
                                            <span class="activity-text">Backup automático realizado</span>
                                            <span class="activity-time">05/06/2023, 03:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dashboard-card resource-usage">
                            <div class="card-header">
                                <h2>Uso de Recursos</h2>
                                <div class="card-tabs">
                                    <button class="tab-btn active" data-tab="daily">Diário</button>
                                    <button class="tab-btn" data-tab="weekly">Semanal</button>
                                    <button class="tab-btn" data-tab="monthly">Mensal</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="usage-chart">
                                    <canvas id="resourceChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Servers Section -->
                <section class="dashboard-section" id="servers">
                    <div class="section-header">
                        <h1>Meus Servidores</h1>
                        <button class="btn-add-server">Novo Servidor</button>
                    </div>
                    
                    <div class="servers-grid">
                        <div class="server-card">
                            <div class="server-card-header">
                                <div class="server-info">
                                    <h3>RP Brasil</h3>
                                    <span class="server-type">SAMP</span>
                                </div>
                                <div class="server-status online">Online</div>
                            </div>
                            <div class="server-card-body">
                                <div class="server-stats">
                                    <div class="stat">
                                        <span class="stat-label">Jogadores</span>
                                        <span class="stat-value">42/100</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-label">Uptime</span>
                                        <span class="stat-value">5d 12h</span>
                                    </div>
                                </div>
                                <div class="server-metrics">
                                    <div class="metric">
                                        <span class="metric-label">CPU</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 45%;"></div>
                                        </div>
                                        <span class="metric-value">45%</span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-label">RAM</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 60%;"></div>
                                        </div>
                                        <span class="metric-value">60%</span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-label">Disco</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 30%;"></div>
                                        </div>
                                        <span class="metric-value">30%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="server-card-footer">
                                <div class="server-ip">IP: 192.168.1.1:7777</div>
                                <div class="server-actions">
                                    <button class="btn-server-control restart">Reiniciar</button>
                                    <button class="btn-server-control stop">Parar</button>
                                    <button class="btn-server-control manage">Gerenciar</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="server-card">
                            <div class="server-card-header">
                                <div class="server-info">
                                    <h3>Cidade Nova</h3>
                                    <span class="server-type">Open-MP</span>
                                </div>
                                <div class="server-status online">Online</div>
                            </div>
                            <div class="server-card-body">
                                <div class="server-stats">
                                    <div class="stat">
                                        <span class="stat-label">Jogadores</span>
                                        <span class="stat-value">28/150</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-label">Uptime</span>
                                        <span class="stat-value">3d 8h</span>
                                    </div>
                                </div>
                                <div class="server-metrics">
                                    <div class="metric">
                                        <span class="metric-label">CPU</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 30%;"></div>
                                        </div>
                                        <span class="metric-value">30%</span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-label">RAM</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 40%;"></div>
                                        </div>
                                        <span class="metric-value">40%</span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-label">Disco</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 25%;"></div>
                                        </div>
                                        <span class="metric-value">25%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="server-card-footer">
                                <div class="server-ip">IP: 192.168.1.2:7777</div>
                                <div class="server-actions">
                                    <button class="btn-server-control restart">Reiniciar</button>
                                    <button class="btn-server-control stop">Parar</button>
                                    <button class="btn-server-control manage">Gerenciar</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="server-card">
                            <div class="server-card-header">
                                <div class="server-info">
                                    <h3>joaosilva.com.br</h3>
                                    <span class="server-type">Web</span>
                                </div>
                                <div class="server-status online">Online</div>
                            </div>
                            <div class="server-card-body">
                                <div class="server-stats">
                                    <div class="stat">
                                        <span class="stat-label">Visitas</span>
                                        <span class="stat-value">1.2k/dia</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-label">Uptime</span>
                                        <span class="stat-value">30d+</span>
                                    </div>
                                </div>
                                <div class="server-metrics">
                                    <div class="metric">
                                        <span class="metric-label">CPU</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 20%;"></div>
                                        </div>
                                        <span class="metric-value">20%</span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-label">RAM</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 15%;"></div>
                                        </div>
                                        <span class="metric-value">15%</span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-label">Espaço</span>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: 35%;"></div>
                                        </div>
                                        <span class="metric-value">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="server-card-footer">
                                <div class="server-ip">URL: joaosilva.com.br</div>
                                <div class="server-actions">
                                    <button class="btn-server-control restart">Reiniciar</button>
                                    <button class="btn-server-control stop">Parar</button>
                                    <button class="btn-server-control manage">Gerenciar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    
    <script src="assets/js/dashboard.js"></script>
</body>
</html>
