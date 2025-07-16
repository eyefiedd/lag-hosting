// Sistema principal do site
class LagHostingSystem {
  constructor() {
    this.discordInvite = "https://discord.gg/laghosting"
    this.init()
  }

  init() {
    this.initializeNavigation()
    this.initializeMobileMenu()
    this.initializeAnimations()
    this.initializeCounters()
    this.initializePurchaseTabs()
    this.initializeScrollEffects()
    this.initializeToastSystem()
    this.initializeLoadingSystem()
    this.initializeStatusSystem()
    this.initializeHeaderVisibility()
    this.createLoadingOverlay()
    this.createToastContainer()
  }

  // Sistema de Navegação
  initializeNavigation() {
    const navTabs = document.querySelectorAll(".nav-tab, .mobile-nav-tab")
    const tabContents = document.querySelectorAll(".tab-content")
    const header = document.querySelector(".header")

    navTabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const targetTab = tab.dataset.tab
        this.switchTab(targetTab)
      })
    })

    // Header scroll effect
    let lastScrollTop = 0
    window.addEventListener("scroll", () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop

      if (scrollTop > 100) {
        header.classList.add("scrolled")
      } else {
        header.classList.remove("scrolled")
      }

      if (scrollTop > lastScrollTop && scrollTop > 200) {
        header.style.transform = "translateY(-100%)"
      } else {
        header.style.transform = "translateY(0)"
      }

      lastScrollTop = scrollTop
    })
  }

  // Sistema de Menu Mobile
  initializeMobileMenu() {
    const hamburger = document.getElementById("hamburger")
    const mobileMenu = document.getElementById("mobile-menu")
    const body = document.body

    if (hamburger && mobileMenu) {
      hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active")
        mobileMenu.classList.toggle("active")
        body.style.overflow = mobileMenu.classList.contains("active") ? "hidden" : ""
      })

      // Fechar menu ao clicar em um item
      const mobileNavTabs = document.querySelectorAll(".mobile-nav-tab")
      mobileNavTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
          hamburger.classList.remove("active")
          mobileMenu.classList.remove("active")
          body.style.overflow = ""
        })
      })

      // Fechar menu ao clicar fora
      mobileMenu.addEventListener("click", (e) => {
        if (e.target === mobileMenu) {
          hamburger.classList.remove("active")
          mobileMenu.classList.remove("active")
          body.style.overflow = ""
        }
      })
    }
  }

  // Sistema de Troca de Abas
  switchTab(tabName) {
    const navTabs = document.querySelectorAll(".nav-tab, .mobile-nav-tab")
    const tabContents = document.querySelectorAll(".tab-content")

    navTabs.forEach((t) => t.classList.remove("active"))
    tabContents.forEach((content) => content.classList.remove("active"))

    const targetTabs = document.querySelectorAll(`[data-tab="${tabName}"]`)
    const targetContent = document.getElementById(tabName)

    targetTabs.forEach((tab) => tab.classList.add("active"))
    if (targetContent) {
      targetContent.classList.add("active")
    }

    // Scroll to top
    window.scrollTo({ top: 0, behavior: "smooth" })
  }

  // Sistema de Animações
  initializeAnimations() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px",
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate")

          const children = entry.target.querySelectorAll("[data-delay]")
          children.forEach((child, index) => {
            setTimeout(
              () => {
                child.classList.add("animate")
              },
              Number.parseInt(child.dataset.delay) || index * 100,
            )
          })
        }
      })
    }, observerOptions)

    const animatedElements = document.querySelectorAll(
      ".service-card, .plan-card, .contact-item, .stat-box, .feature-card",
    )
    animatedElements.forEach((el) => observer.observe(el))
  }

  // Sistema de Contadores
  initializeCounters() {
    const counters = document.querySelectorAll(".stat-number[data-target]")

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target
          const target = Number.parseInt(counter.dataset.target)
          this.animateCounter(counter, target)
          counterObserver.unobserve(counter)
        }
      })
    })

    counters.forEach((counter) => counterObserver.observe(counter))

    // Contador do footer
    setInterval(() => {
      const footerClients = document.getElementById("footer-clients")
      if (footerClients) {
        const current = Number.parseInt(footerClients.textContent.replace(/\D/g, ""))
        const variation = Math.floor(Math.random() * 5) + 1
        footerClients.textContent = `${current + variation}+`
      }
    }, 30000)
  }

  animateCounter(element, target, duration = 2000) {
    let start = 0
    const increment = target / (duration / 16)

    const timer = setInterval(() => {
      start += increment
      if (start >= target) {
        element.textContent = target
        clearInterval(timer)
      } else {
        element.textContent = Math.floor(start)
      }
    }, 16)
  }

  // Sistema de Abas de Compra
  initializePurchaseTabs() {
    const purchaseTabs = document.querySelectorAll(".purchase-tab")
    const purchaseServices = document.querySelectorAll(".purchase-service")

    purchaseTabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const targetService = tab.dataset.service

        purchaseTabs.forEach((t) => t.classList.remove("active"))
        purchaseServices.forEach((service) => service.classList.remove("active"))

        tab.classList.add("active")
        const targetContent = document.getElementById(`purchase-${targetService}`)
        if (targetContent) {
          targetContent.classList.add("active")
        }
      })
    })
  }

  // Sistema de Efeitos de Scroll
  initializeScrollEffects() {
    window.addEventListener("scroll", () => {
      const scrolled = window.pageYOffset

      const serverIllustration = document.querySelector(".server-illustration")
      if (serverIllustration) {
        const speed = 0.3
        const yPos = -(scrolled * speed)
        serverIllustration.style.transform = `translateY(${yPos}px)`
      }

      const lines = document.querySelectorAll(".line")
      lines.forEach((line, index) => {
        const speed = 0.1 + index * 0.05
        const yPos = Math.sin(scrolled * 0.01 + index) * 5
        line.style.transform = `translateY(${yPos}px)`
      })
    })
  }

  initializeHeaderVisibility() {
    const header = document.querySelector(".header")

    setTimeout(() => {
      header.classList.add("visible")
    }, 1000)

    window.addEventListener("scroll", () => {
      const scrolled = window.pageYOffset

      if (scrolled > 50) {
        header.classList.add("scrolled")
      } else {
        header.classList.remove("scrolled")
      }
    })
  }

  // Sistema de Toast/Notificações
  initializeToastSystem() {
    this.toastContainer = null
  }

  createToastContainer() {
    if (!this.toastContainer) {
      this.toastContainer = document.createElement("div")
      this.toastContainer.className = "toast-container"
      document.body.appendChild(this.toastContainer)
    }
  }

  showToast(title, message, type = "info", duration = 5000) {
    const toast = document.createElement("div")
    toast.className = `toast ${type}`

    const icons = {
      success: "✅",
      error: "❌",
      warning: "⚠️",
      info: "ℹ️",
      discord: "💬",
    }

    toast.innerHTML = `
            <div class="toast-content">
                <div class="toast-icon">${icons[type] || icons.info}</div>
                <div class="toast-text">
                    <div class="toast-title">${title}</div>
                    <div class="toast-message">${message}</div>
                </div>
                <button class="toast-close" onclick="this.parentElement.parentElement.remove()">×</button>
            </div>
        `

    this.toastContainer.appendChild(toast)

    setTimeout(() => {
      if (toast.parentElement) {
        toast.style.animation = "slideOutRight 0.3s ease-in"
        setTimeout(() => toast.remove(), 300)
      }
    }, duration)
  }

  // Sistema de Loading
  initializeLoadingSystem() {
    this.loadingOverlay = null
  }

  createLoadingOverlay() {
    if (!this.loadingOverlay) {
      this.loadingOverlay = document.createElement("div")
      this.loadingOverlay.className = "loading-overlay"
      this.loadingOverlay.innerHTML = `
                <div class="loading-content">
                    <div class="loading-spinner"></div>
                    <div class="loading-text">Redirecionando...</div>
                    <div class="loading-subtext">Você será direcionado para nosso Discord</div>
                </div>
            `
      document.body.appendChild(this.loadingOverlay)
    }
  }

  showLoading() {
    if (this.loadingOverlay) {
      this.loadingOverlay.classList.add("active")
    }
  }

  hideLoading() {
    if (this.loadingOverlay) {
      this.loadingOverlay.classList.remove("active")
    }
  }

  // Sistema de Status
  initializeStatusSystem() {
    this.updateServerStatus()
    setInterval(() => this.updateServerStatus(), 60000) // Atualiza a cada minuto
  }

  updateServerStatus() {
    const statusDots = document.querySelectorAll(".status-dot")
    const statusTexts = document.querySelectorAll(".status-text")

    // Simula verificação de status (em produção, seria uma API real)
    const isOnline = Math.random() > 0.1 // 90% chance de estar online

    statusDots.forEach((dot) => {
      dot.className = `status-dot ${isOnline ? "online" : "offline"}`
    })

    statusTexts.forEach((text) => {
      text.textContent = isOnline ? "Online" : "Offline"
    })
  }

  // Funções de Compra e Redirecionamento
  selectService(serviceType) {
    this.switchTab("purchase")

    setTimeout(() => {
      const purchaseTab = document.querySelector(`[data-service="${serviceType}"]`)
      if (purchaseTab) {
        purchaseTab.click()
      }
    }, 300)
  }

  purchasePlan(service, plan) {
    this.showLoading()

    this.showToast(
      "Redirecionando para Discord",
      `Plano ${plan} de ${service} selecionado. Você será direcionado para nosso Discord para finalizar a compra.`,
      "discord",
      3000,
    )

    setTimeout(() => {
      this.hideLoading()
      this.openDiscord()
    }, 2000)
  }

  openDiscord() {
    this.showToast(
      "Abrindo Discord",
      "Você será redirecionado para nosso servidor Discord onde nossa equipe irá te ajudar!",
      "discord",
      3000,
    )

    setTimeout(() => {
      window.open(this.discordInvite, "_blank")
    }, 1000)
  }

  showStatus() {
    this.showToast("Status dos Servidores", "Todos os serviços estão funcionando normalmente. Uptime: 99.9%", "success")
  }
}

// Funções globais para compatibilidade
let lagHosting

document.addEventListener("DOMContentLoaded", () => {
  lagHosting = new LagHostingSystem()
})

// Funções globais
function switchTab(tabName) {
  if (lagHosting) lagHosting.switchTab(tabName)
}

function selectService(serviceType) {
  if (lagHosting) lagHosting.selectService(serviceType)
}

function purchasePlan(service, plan) {
  if (lagHosting) lagHosting.purchasePlan(service, plan)
}

function openDiscord() {
  if (lagHosting) lagHosting.openDiscord()
}

function showStatus() {
  if (lagHosting) lagHosting.showStatus()
}

// Easter egg - Konami Code
let konamiCode = []
const konamiSequence = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65]

document.addEventListener("keydown", (e) => {
  konamiCode.push(e.keyCode)
  if (konamiCode.length > konamiSequence.length) {
    konamiCode.shift()
  }

  if (konamiCode.join(",") === konamiSequence.join(",")) {
    if (lagHosting) {
      lagHosting.showToast(
        "🎉 Easter Egg Encontrado!",
        "Parabéns! Você descobriu nosso easter egg. Entre no Discord e mencione 'KONAMI' para ganhar um desconto especial!",
        "success",
        10000,
      )
    }
    konamiCode = []
  }
})
