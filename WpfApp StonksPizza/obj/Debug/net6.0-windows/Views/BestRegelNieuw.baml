   M S B A M L   `   `   `  ????M  IWpfApp StonksPizza, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullC&clr-namespace:WpfApp_StonksPizza.ViewsWpfApp_StonksPizza.Views  5   	   -    'WpfApp_StonksPizza.Views.BestRegelNieuw   5   	   W SPresentationCore, Version=6.0.2.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=6.0.2.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=6.0.2.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=6.0.2.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=6.0.2.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   8local&clr-namespace:WpfApp_StonksPizza.Views     5   	     ? Title$&   Stonks-pizza Personeelsprogramma??5   	   $
??auto??62   $
??auto??6@    ? WindowState$ 	Maximized=?6M   .??5	      ? $	??800??6   $
??1280??6   
??????? ? ColumnDefinitions 5
   
   ?? 5      ?? 5      ?? 5      ?? 5       ? RowDefinitions 5   
   ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      ?? 5      .+?5   
   ?? $??35(?6   $??DemiBold"?6   $??Center=?64   $??0,0,0,0q?6Q   $??1??6b   $??2??6r   $??1??6?   .??6?   Bestelregel toevoegen6?   ?? 5   
   $??125,15,10,15q?6   $??3??6&   $??1??63   $??16(?6C   .??6Q   
Pizza Naam6]   ?? 5   
   -   5         ??Name$ 	PizzaNaam??5   F   $??10,20,100,20q?6   $??3??6)   $??2??66    ?? DisplayMemberPath$ Pnaam??6{    ?? SelectedValuePath$ 	ProductID??6?   ??6Z   ?? *
Products+6?   ?? 5!   
   $??125,15,10,15q?6   $??4??6&   $??1??63   $??16(?6C   .??6Q   Aantal6Y   ?? 5"   
   -   5         ??Name$ Aantal??5"   E   $??10,20,100,20q?6   $??4??6(   $??2??65   6E   ?? 5$   
   $??125,15,10,15q?6   $??5??6&   $??1??63   $??16(?6C   .??6Q   
Afmeting6[   ?? 5%   
   -   5        $ ComboAfmeting??5%   F   $??10,20,100,20q?6   $??5??6)   $??2??66   ??6]   ?? *MyEnumTypeValues+?? 5'   
   -   5        $??80,20,20,20q?5'      $??16(?6&   $??1??64   $??7??6D   .??6f   
Voeg toe6p   ?? 5(   
   -   5        $??20,20,80,20q?5(      $??16(?6&   $??2??64   $??7??6D   .??6e   Terug6l   5)      5*      