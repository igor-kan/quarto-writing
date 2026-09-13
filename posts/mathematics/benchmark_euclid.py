import time
import random
import sys
import os

sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)))
from test_euclid_algorithms import gcd_subtractive, gcd_euclidean, gcd_binary

def run_benchmark():
    print("=" * 75)
    print("EUCLIDEAN ALGORITHM EMPIRICAL PERFORMANCE BENCHMARK")
    print("=" * 75)
    
    print("\n[1] Small Integers Comparison (Subtractive vs Modulo vs Binary):")
    pairs = [(random.randint(100, 10000), random.randint(100, 10000)) for _ in range(500)]
    
    t0 = time.perf_counter()
    for a, b in pairs:
        gcd_subtractive(a, b)
    t_sub = time.perf_counter() - t0
    
    t0 = time.perf_counter()
    for a, b in pairs:
        gcd_euclidean(a, b)
    t_mod = time.perf_counter() - t0
    
    t0 = time.perf_counter()
    for a, b in pairs:
        gcd_binary(a, b)
    t_bin = time.perf_counter() - t0
    
    print(f"  - Subtractive (Anthyphairesis) : {t_sub*1000:8.2f} ms (1.00x baseline)")
    print(f"  - Standard Modulo Euclidean     : {t_mod*1000:8.2f} ms ({t_sub/t_mod:6.1f}x speedup)")
    print(f"  - Stein Binary GCD              : {t_bin*1000:8.2f} ms ({t_sub/t_bin:6.1f}x speedup)")

    print("\n[2] High-Precision Scaling (Modulo vs Binary GCD):")
    print(f"{'Bit Length':<12} | {'Modulo (ms)':<15} | {'Binary (ms)':<15} | {'Speedup Ratio':<15}")
    print("-" * 65)
    
    for bits in [64, 256, 1024, 4096]:
        large_pairs = [(random.getrandbits(bits), random.getrandbits(bits)) for _ in range(200)]
        
        t0 = time.perf_counter()
        for a, b in large_pairs:
            gcd_euclidean(a, b)
        t_m = time.perf_counter() - t0
        
        t0 = time.perf_counter()
        for a, b in large_pairs:
            gcd_binary(a, b)
        t_b = time.perf_counter() - t0
        
        ratio = t_m / t_b if t_b > 0 else 0
        print(f"{bits:<12} | {t_m*1000:<15.3f} | {t_b*1000:<15.3f} | {ratio:<15.2f}x")

    print("=" * 75)
    print("Benchmark completed successfully.")

if __name__ == '__main__':
    run_benchmark()
