   M S B A M L   `   `   `  ????M  IWpfApp StonksPizza, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullC&clr-namespace:WpfApp_StonksPizza.ViewsWpfApp_StonksPizza.Views  5   	   .    (WpfApp_StonksPizza.Views.BestellingNieuw   5   	   W SPresentationCore, Version=6.0.2.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=6.0.2.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=6.0.2.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=6.0.2.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=6.0.2.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   8local&clr-namespace:WpfApp_StonksPizza.Views     5   	     ? Title$&   Stonks-pizza Personeelsprogramma??5   	   $
??auto??62   $
??auto??6@    ? WindowState$ 	Maximized=?6M   .??5
      ? $	??800??6   $
??1280??6    ? ColumnDefinitions 5   
   ?? 5      ?? 5      ?? 5      ?? 5       ? RowDefinitions 5   
   ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      .+?5   
   ?? $??35(?6   $??DemiBold"?6   $??Center=?64   $??0,0,0,0q?6Q   $??1??6b   $??2??6r   $??1??6?   .??6?   Bestelling toevoegen6?   ?? 5    
   $??125,15,10,15q?6   $??2??6&   $??1??63   $??16(?6C   .??6Q   
Klant Naam6]   ?? 5!   
   -   5         ??Name$ 	KlantNaam??5!   F   $??10,20,100,20q?6   $??2??6)   $??2??66    ?? DisplayMemberPath$
 Naam??6x   ??6Y   ?? *Orders+6x   ?? 5#   
   $??125,15,10,15q?6   $??3??6&   $??1??63   $??16(?6C   .??6Q   Adres6X   ?? 5$   
   -   5        $ Adres??5$   F   $??10,20,100,20q?6   $??3??6)   $??2??66   $ Adres??6t   ??6U   ?? *Orders+6t   ?? 5&   
   $??125,15,10,15q?6   $??4??6&   $??1??63   $??16(?6C   .??6Q   Status6Y   ?? 5'   
   -   5        $ ComboStatus??5'   F   $??10,20,100,20q?6   $??4??6)   $??2??66   ??6[   ?? *MyEnumTypeValues2+?? 5)   
   $??125,15,10,15q?6   $??5??6&   $??1??63   $??16(?6C   .??6Q   Bestelregels:6`   ?? 5*   
   $??6??6   $??1??6!   $??2??6u   $??2??6?   ??61   ?? *Meals+ ?? SelectedItem 6O   ?? *SelectedMeal+??5+      ?? 5,      .R?5-      ?? .+?5.      ?? ??6$   ?? *Name+?? 5/      -   5        $??wijzigen??5/   !   64   ?? 50      -   5        $??verwijderen??50   !   67   51      52      54      ?? 56   
   -   5        $??80,20,20,20q?56      $??16(?6&   $??1??64   $??9??6D   .??6f   
Voeg toe6p   ?? 57   
   -   5        $??20,20,80,20q?57      $??16(?6&   $??2??64   $??9??6D   .??6e   Terug6l   58      59      