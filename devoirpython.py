def afficher_carres(nombre_initial, nombre_final):
    
    if nombre_initial <= nombre_final:
        nombre = nombre_initial

        while nombre <= nombre_final:
            carre = nombre ** 2
            print("Le carré de", nombre, "est", carre)
            nombre += 1
    else:
        print("Le nombre initial doit être inférieur ou égal au nombre final.")

nombre_initial = int(input("Entrez le nombre initial : "))
nombre_final = int(input("Entrez le nombre final : "))

afficher_carres(nombre_initial, nombre_final)
