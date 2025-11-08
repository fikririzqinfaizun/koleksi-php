<?php
require_once 'autoload.php';

echo "===============================================\n";
echo "=== DEMO PROYEK STRUKTUR DATA PHP (KOLEKSI) ===\n";
echo "===============================================\n\n";

// --- 1. STACK DEMO (Tumpukan - LIFO) ---
echo "--- 1. STACK DEMO ---\n";
$st = new Stack();
$st->add("Topi");
$st->add("Baju");
$st->add("Celana");
echo "Isi Stack Awal (getAll): " . json_encode($st->getAll()) . "\n"; 
echo "Ukuran (size): " . $st->size() . "\n";

echo "\nOperasi LIFO:\n";
echo "Peek (peek): " . ($st->peek() ?? 'Kosong') . "\n";
echo "Pop (pop): " . ($st->pop() ?? 'Kosong') . "\n";
echo "Setelah Pop (peek): " . ($st->peek() ?? 'Kosong') . "\n";
echo "Isi Stack Akhir (getAll): " . json_encode($st->getAll()) . "\n"; 

echo "\n-------------------------------------------------\n";

// --- 2. QUEUE DEMO (Antrian - FIFO) ---
echo "--- 2. QUEUE DEMO ---\n";
$q = new Queue();
$q->add("Dokumen A");
$q->add("Dokumen B");
$q->add("Dokumen C");
echo "Isi Antrian Awal (getAll): " . json_encode($q->getAll()) . "\n"; 
echo "Ukuran (size): " . $q->size() . "\n";

echo "\nOperasi FIFO:\n";
echo "Peek Depan (peek): " . ($q->peek() ?? 'Kosong') . "\n";
echo "Dequeue (dequeue): " . ($q->dequeue() ?? 'Kosong') . "\n";
echo "Isi Antrian Akhir (getAll): " . json_encode($q->getAll()) . "\n"; 

echo "\n-------------------------------------------------\n";

// --- 3. ARRAYLIST DEMO ---
echo "--- 3. ARRAYLIST DEMO ---\n";
$al = new ArrayList(); 
$al->add("P1");
$al->add("P2");
$al->add("P3");
echo "Isi List Awal (getAll): " . json_encode($al->getAll()) . "\n"; 

$al->set(1, "P2_Baru");
echo "Setelah Set Indeks 1 (set): " . json_encode($al->getAll()) . "\n"; 
$al->remove("P1");
echo "Setelah Remove 'P1' (remove): " . json_encode($al->getAll()) . "\n";
echo "Get Indeks 0 (get): " . $al->get(0) . "\n";

echo "\n-------------------------------------------------\n";

// --- 4. LINKED LIST DEMO (Iterasi) ---
echo "--- 4. LINKED LIST DEMO ---\n";
$ll = new LinkedList();
$ll->add("Jakarta");
$ll->add("Bandung");
$ll->add("Surabaya");

echo "Isi List Awal (getAll): " . json_encode($ll->getAll()) . "\n"; 
$ll->remove("Bandung");
echo "Setelah Remove 'Bandung' (remove): " . json_encode($ll->getAll()) . "\n";

echo "\nIterasi Manual (hasNext/next):\n";
while ($ll->hasNext()) {
    echo "   -> Data (next): " . $ll->next() . "\n";
}

echo "\n-------------------------------------------------\n";

// --- 5. HASHMAP DEMO ---
echo "--- 5. HASHMAP DEMO ---\n";
$mp = new HashMap();
$mp->put("nama", "Reno");
$mp->put("usia", 28);
$mp->put("status", "Lajang");

echo "Isi Map Awal (getAll): " . json_encode($mp->getAll()) . "\n";
echo "Kunci (keySet): " . json_encode($mp->keySet()) . "\n";
echo "Nilai (values): " . json_encode($mp->values()) . "\n";
echo "Get 'usia' (get): " . ($mp->get("usia") ?? 'null') . "\n";

$mp->removeKey("status");
echo "Setelah Remove 'status' (removeKey): " . json_encode($mp->getAll()) . "\n";

echo "\n===============================================\n";
echo "=== DEMO SELESAI ===\n";