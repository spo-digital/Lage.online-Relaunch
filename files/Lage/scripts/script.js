// Аbfrage aller Elemente mit der Klasse 'rsce_paris__item'
const categoryItems = document.querySelectorAll('.rsce_paris__item');

// Funktion zur Verarbeitung des Click-Events
categoryItems.forEach(item => {
  item.addEventListener('click', function() {
    // Abrufen des Wertes von 'data-category' (z.B. "tennis")
    const category = this.dataset.category;

    // Sicherstellen, dass "category" einen gültigen Wert hat
    if (!category) return;

    // Suchen und Entfernen der Klasse "active" vom aktuellen aktiven Element
    const currentActive = document.querySelector('.rsce_london.active');
    if (currentActive) {
      currentActive.classList.remove('active');
    }

    // Finden des Ziel-Elements anhand der Datenkategorie
    const targetElement = document.getElementById(category);

    // Wenn das Ziel-Element gefunden wurde, Klasse "active" hinzufügen und dorthin scrollen
    if (targetElement) {
      targetElement.classList.add('active');
      targetElement.scrollIntoView({ behavior: 'smooth' });
    } else {
      console.warn(`Element with id "${category}" not found`);
    }
  });
});

