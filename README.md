- **Database Integration:** Utilizes MySQL databases to store and retrieve information about apps and games.
- **Dynamic Content:** Provides real-time updates and displays a diverse range of apps and games.
- **Interactive User Experience:** Offers smooth navigation and intuitive design for enhanced user experience.
- **Redirect Functionality:** Directs users to respective pages for more information or to initiate downloads.

- note: requires your own database with actual data in it, please edit the code accordingly for database name, username, password, etc...


// Write Program to implement Tower of Hanoi.

#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
void tower(int n, char from_rod, char to_rod, char aux_rod)
{
    if (n == 1)
    {
        printf("Move disk 1 from rod %c to rod %c\n", from_rod, to_rod);
        return;
    }
    tower(n - 1, from_rod, aux_rod, to_rod);
    printf("Move disk %d from rod %c to rod %c\n", n, from_rod, to_rod);
    tower(n - 1, aux_rod, to_rod, from_rod);
}
int main()
{
    int n;
    printf("Enter the number of disks: ");
    scanf("%d", &n);
    tower(n, 'A', 'C', 'B');
    return 0;
}