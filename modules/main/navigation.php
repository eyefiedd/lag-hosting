<header class="header" id="header">
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="8" fill="#8b5cf6"/>
                        <path d="M12 10L20 16L12 22V10Z" fill="white"/>
                    </svg>
                    <span class="logo-text">Lag Hosting</span>
                </a>
            </div>
            
            <div class="nav-tabs" id="nav-tabs">
                <button class="nav-tab active" data-tab="home">Início</button>
                <button class="nav-tab" data-tab="services">Serviços</button>
                <button class="nav-tab" data-tab="purchase">Comprar</button>
                <button class="nav-tab" data-tab="about">Sobre</button>
                <button class="nav-tab" data-tab="contact">Contato</button>
            </div>
            
            <div class="nav-actions" id="nav-actions">
                <div class="user-profile" id="user-profile">
                    <button class="btn-login" id="login-button" onclick="connectDiscord()">Login</button>
                    <div class="user-info" id="user-info">
                        <div class="user-avatar" id="user-avatar"></div>
                        <span class="user-name" id="user-name"></span>
                    </div>
                </div>
                <button class="btn-status" id="status-btn">
                    <span class="status-dot"></span>
                    <span class="status-text">Online</span>
                </button>
            </div>
            
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        
        <div class="mobile-menu" id="mobile-menu">
            <div class="mobile-menu-content">
                <div class="mobile-nav-tabs">
                    <button class="mobile-nav-tab active" data-tab="home">
                        <span class="tab-text">Início</span>
                    </button>
                    <button class="mobile-nav-tab" data-tab="services">
                        <span class="tab-text">Serviços</span>
                    </button>
                    <button class="mobile-nav-tab" data-tab="purchase">
                        <span class="tab-text">Comprar</span>
                    </button>
                    <button class="mobile-nav-tab" data-tab="about">
                        <span class="tab-text">Sobre</span>
                    </button>
                    <button class="mobile-nav-tab" data-tab="contact">
                        <span class="tab-text">Contato</span>
                    </button>
                </div>
                
                <div class="mobile-actions">
                    <div class="mobile-user-profile">
                        <button class="mobile-btn-login" id="mobile-login-button" onclick="connectDiscord()">
                            Entrar via Discord
                        </button>
                        <div class="mobile-user-info" id="mobile-user-info">
                            <div class="mobile-user-avatar" id="mobile-user-avatar"></div>
                            <span class="mobile-user-name" id="mobile-user-name"></span>
                        </div>
                    </div>
                    <div class="mobile-status">
                        <span class="status-dot online"></span>
                        <span>Servidores Online</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
